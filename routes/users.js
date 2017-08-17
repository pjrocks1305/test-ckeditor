var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {

    var a = 4;
    res.send({data : a, status: 'respond with a resource'});
});


router.get('/myid/:id', function(req, res, next) {
    res.send({data : 'requested id is ' + req.params.id});
});


module.exports = router;
