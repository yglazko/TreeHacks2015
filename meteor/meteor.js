Pictures = new Mongo.Collection("pictures");

if (Meteor.isClient) {
    Template.body.helpers({
	pictures: function(){
	    return Pictures.find({});
	}
    });
    Template.body.events({
	"submit .picture-save": function(ev){
	    _.each(ev.srcElement.files, function(file) {
		Meteor.saveFile(file, file.name);
	    });
	    console.log("New entry added successfully"); 
	    return false;
	},
	"submit .new-picture" : function(event){
	    var text = event.target.name.value;
	    var long = event.target.long.value;
	    var lat = event.target.lat.value;

	    Pictures.insert({
		name: name,
		created: new Date(),
		longitude: long,
		latitude: lat
	    });
	    console.log("New entry added successfully"); 
	    event.target.name.value="";
	    event.target.long.value="";
	    event.target.lat.value="";
	    return false;//prevent default form submit!!
	}
    });
}

if (Meteor.isServer) {
  Meteor.startup(function () {
    // code to run on server at startup
  });
}
