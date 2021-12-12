
const {MongoClient} = require('mongodb');
const url= "mongodb+srv://Arsh:Arsh@cluster0.fhrqm.mongodb.net/Demo?retryWrites=true&w=majority"
MongoClient.connect(url, function(err, db) {
    if (err) throw err;
    var dbo = db.db("Demo");
    dbo.collection("Users").find().toArray(function(err, result) {
      if (err) throw err;
      console.log(result);
      db.close();
    });
  });