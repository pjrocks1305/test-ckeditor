var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
    var a = 4;
    res.send({data : a, status: 'this is post'});
});


module.exports = router;
 //this a file