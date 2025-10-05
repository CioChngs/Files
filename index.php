<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Letter to My Girlfriend</title>
  <style>
    body {
      font-family: 'Segoe Print', cursive;
      margin: 0;
      padding: 20px;
      line-height: 1.5;
      background: url('images/background.gif') no-repeat center center fixed; /* Set the GIF background */
      background-size: cover; /* Make the background cover the entire page */
    }

    .container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(212, 184, 151, 0.9); /* Light yellow-brown paper effect */
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Slight shadow to give depth */
    }

    header h1 {
      text-align: center;
      color: #ff4081;
    }

    p {
      margin: 10px 0;
    }

    .letter-content {
      font-size: 18px;
      white-space: pre-wrap; /* Preserve line breaks */
      margin-top: 20px;
      color: #333; /* Dark text color for readability */
    }

    .red-text {
      color: #4caf50; /* Style for red text */
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>Merry Christmas</h1>
    </header>

    <section class="letter-form">
      <div class="letter-content">
        <?php
          // Path to your text file
          $file_path = 'letter.txt';

          // Check if the file exists
          if (file_exists($file_path)) {
            // Read the file content
            $content = file_get_contents($file_path);

            // Replace "Hakuna" and "Kevin" with red-colored versions
            $content = str_replace('Hakuna', '<span class="red-text">Hakuna</span>', $content);
            $content = str_replace('Kevin', '<span class="red-text">Kevin</span>', $content);

            // Output the modified content with preserved line breaks
            echo nl2br($content); // nl2br preserves line breaks
          } else {
            echo "Sorry, the letter file is not available.";
          }
        ?>
      </div>
    </section>
  </div>
</body>
</html>

