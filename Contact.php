<html>
  <head>
    <!-- Bootstrap CSS -->
    <title>Contact</title>
    <link rel="stylesheet" href="Contactme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="container mt-5">
  <ul>

  <li><a href="news.asp">News</a></li>
  <li><a href="Games.php">Games</a></li>
  <li><a href="Discord.php">Discord</a></li>
  <li><a href="homepage.php">Home</a></li>
  

  </ul>
    <form onsubmit="sendContact(event)">
      <div class="mb-3">
        <label for="emailInput" class="form-label">Enter your email address</label>
        <input type="email" class="form-control" id="emailInput">
      </div>
      <div class="mb-3">
        <label for="messageInput" class="form-label">Enter your message</label>
        <textarea class="form-control" id="messageInput" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
      async function sendContact(ev) {
        ev.preventDefault();

        const senderEmail = document
          .getElementById('emailInput').value;
        const senderMessage = document
          .getElementById('messageInput').value;

        const webhookBody = {
          embeds: [{
            title: 'Contact Form Submitted',
            fields: [
              { name: 'Sender', value: senderEmail },
              { name: 'Message', value: senderMessage }
            ]
          }],
        };

        const webhookUrl = 'https://discord.com/api/webhooks/1235307085953241119/iAcUia5INM4S1u8fKkxxyp1EF66KJ6bwZAXnagRXGoa2TsJt8xlcorg6nCbhYYIxdFQv';

        const response = await fetch(webhookUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(webhookBody),
        });

        if (response.ok) {
          alert('The message has been sent will be contacted by email as soon as possible!');
        } else {
          alert('There was an error! Try again later!');
        }
      }
    </script>
  </body>
</html>