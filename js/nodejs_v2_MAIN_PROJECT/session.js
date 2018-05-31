(function() {
  class Session {
    constructor() {
      let session = require('express-session');
      let LStorage = require('connect-mssql')(session);

      module.exports = {
        createStorage: function () {
          let configStorage = {
            user: 'user',
            password: '0000',
            server: 'http://login.salesforce.com',
            port: 443
          };
          return new LStorage(configStorage);
        }
      };
    }
  }
  window.app.Session = Session;
}());