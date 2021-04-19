var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'abhisheksharma3118@gmail.com',
    pass: 'abhi9916593118'
  }
});

var mailOptions = {
  from: 'abhisheksharma3118@gmail.com',
  to: 'rraki8434@gmail.com',
  subject: 'Sending Email using Node.js',
  text: 'That was easy!'
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
});