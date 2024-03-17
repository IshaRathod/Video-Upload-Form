<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #51484f;
        }

        h5 {
            text-align: center;
            margin-bottom: 30px;
            margin-top: -20px;
            color: #808080;
        }

        input,
        textarea {
            display: block;
            width: 95%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        #tnc {
            
        }        

        .file-upload {
            margin-top: 10px;
            position: relative;
        }

        .file-upload input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 40px 40px 40px 40px;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-button {
            background-color: #e5e4e2;
            border: dashed;
            padding: 100px;
            cursor: pointer;
            color: #555555;
        }

        .file-upload-button:hover {
            background-color: #ccc;
        }

        .no-file-chosen {
            display: block;
            margin-top: 5px;
            color: #999;
        }

        input[type="radio"] {
  display: none;
}

.labelbox {
  cursor: pointer;
  font-size: 16px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}

.labelbox:before {
  content: "";
  display: inline-block;
  width: 15px;
  height: 15px;
  background-color: #ccc;
  border-radius: 50%;
  margin-right: 5px;
  transition: 0.3s;
}

input[type="radio"]:checked + .labelbox:before {
  background-color: #007BFF;
}
        

        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 10px 250px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Submit a Video</h1>
        <h5>Submit your video for evaluation</h5>
        <form action="data_task.php" method="post" enctype="task/">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder="First name">
            <!-- <div class="firstName">First Name</div> -->

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder="Last name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="ex:- abc@gmail.com">

            <label for="videoFile">Upload Video</label>
            <div class="file-upload">
                <input type="file" name="videoFile" id="videoFile" accept="video/*" required>
                <div class="file-upload-button">
                    <h2>Upload a file</h2>
                </div>
                <div class="no-file-chosen">No file chosen</div>
            </div>
            <br>
            <br>
            <div id="tnc">
            <h5>
                Make sure your video is no longer than 10 minutes. <br>
                Make sure you I own the right to use all music & images on the video. <br>
                Make sure your video does not containt unappropriate language, images, or sounds. <br>
            </h5>
        </div>

            <div class="agreement">
                
                <label for="agreement">Do You Agree to the Terms Above?</label>
                <!-- <input type="checkbox" id="agreement">
                <label for="agreement">Yes, I Do</label>
                <input type="checkbox" id="agreement">
                <label for="agreement">No, I Don't</label>
               -->
            </div>

            <input type="radio" id="html" name="agreement" value="Yes, I Do">
            <label for="html" class="labelbox">Yes, I Do</label><br>
            <input type="radio" id="css" name="agreement" value="No, I Don't">
            <label for="css" class="labelbox">No, I Don't</label><br>
            

            <label for="comments">Comments:</label>
            <textarea id="comments" rows="4" name="comments" placeholder="Type here..."></textarea>

            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</body>

</html>