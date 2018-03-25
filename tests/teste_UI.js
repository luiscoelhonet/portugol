var app = require('../bin/www');
module.exports = {
    'demo test google' : function (client) {
        client
            .url('http://127.0.0.1:3000')
            .waitForElementPresent('body', 1000);
    },

    'part two' : function(client) {
        client
            .setValue('input[type=text]', ['nightwatch', client.Keys.ENTER])
            .pause(1000)
            .assert.containsText('#main', 'Night Watch')
            .end();
    }
};