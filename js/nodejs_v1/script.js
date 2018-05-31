function push() {

  const https = require('https');

  const options = {
    hostname: 'login.salesforce.com',
    port: 443,
    path: '/',
    method: 'GET'
  };

  const req = https.request(options, (res) => {
    console.log('statusCode:', res.statusCode);
    console.log('headers:', res.headers);

    res.on('data', (d) => {
      process.stdout.write(d);
    });
  });

  req.on('error', (e) => {
    console.error(e);
  });
  req.end();

  const { URL } = require('url');
  const myURL = new URL('https://login.salesforce.com/');
  console.log(myURL.username);

  // LOGIN /////////////////////////////////////////////////////////////////////
  myURL.username = 'oxyblade-r1vu@force.com';
  console.log(myURL.href);

  // PASSWORD //////////////////////////////////////////////////////////////////
  console.log(myURL.password);
  myURL.password = 'YlY1FCKY-s';
  console.log(myURL.href);
}