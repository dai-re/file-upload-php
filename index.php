<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/i-index.css" type="text/css" media="all" />
    <title>DE file upload</title>
  </head>
<body class="w-screen h-screen flex flex-col justify-center items-center">
     <div class="container-upload mb-5">
      <h2 class="font-bold text-3xl"><span class="text-red-600">DE</span> Upload File</h2>
      <form class="p-1 flex justify-between border border-dashed border-2 border-blue-400 rounded-lg" action="index.php" method="post" enctype="multipart/form-data">
        <input class="hidden" type="file" name="fileToUpload" id="fileToUpload" />
        <label class="w-40 font-medium truncate ... active:scale-90" for="fileToUpload" id="label-input">Drop Here...</label>
        <button class="rounded-lg bg-teal-500 fill-current fill-white" type="submit" name="submit" >
          <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" height="1.5em" width="1.5em"><path d="M24 38q-.65 0-1.075-.425-.425-.425-.425-1.075v-11h-11q-.65 0-1.075-.425Q10 24.65 10 24q0-.65.425-1.075.425-.425 1.075-.425h11v-11q0-.65.425-1.075Q23.35 10 24 10q.65 0 1.075.425.425.425.425 1.075v11h11q.65 0 1.075.425Q38 23.35 38 24q0 .65-.425 1.075-.425.425-1.075.425h-11v11q0 .65-.425 1.075Q24.65 38 24 38Z"/></svg>
        </button>
      </form>
    </div>
    
    <?php if (isset($_POST["submit"])) {
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;

      if (file_exists($target_file)) {
        echo '
        <div class="w-72">
        <div class="bg-orange-500 text-white font-bold rounded-t px-4 py-2">
         Warning
        </div>
        <div class="border border-t-0 border-orange-500 rounded-b bg-orange-100 px-4 py-3 text-red-700">
        <p>Sorry, the file already exists. </p>
        </div>
        </div>
        ';
        $uploadOk = 0;
      }

      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo '
        <div class="w-72">
        <div class="bg-orange-500 text-white font-bold rounded-t px-4 py-2">
         Warning 
        </div>
        <div class="border border-t-0 border-orange-500 rounded-b bg-orange-100 px-4 py-3 text-red-700">
        <p>Sorry, file size is too large. </p>
        </div>
        </div>
        ';
        $uploadOk = 0;
      }

      if ($uploadOk == 1) {
        if (
          move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
        ) {
          echo '<div class="w-72">
            <div class="bg-teal-500 text-white font-bold rounded-t px-4 py-2">
             Info
            </div>
            <div class="border border-t-0 border-teal-100 rounded-b bg-teal-100 px-4 py-3 text-teal-500">
            <p>uploaded successfully.</p>
            </div>
            </div>
            ';
        } else {
          echo '<div class="w-72">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
             Danger 
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>Sorry, an error occurred while uploading the file.</p>
            </div>
            </div>
          ';
        }
      }
    } ?>
    <a href="/file.html" class="flex justify-center items-center mt-2 fill-current fill-teal-500">
      See file list
      <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" height="1.5em" width="1.5em"><path d="m25.05 30.25 5.2-5.2q.45-.45.45-1.05 0-.6-.45-1.05L25 17.7q-.4-.4-1.025-.375-.625.025-1.025.425-.45.45-.45 1.05 0 .6.45 1.05l2.65 2.65h-7.65q-.6 0-1.025.45-.425.45-.425 1.05 0 .65.425 1.075.425.425 1.075.425h7.6l-2.7 2.7q-.4.4-.375 1.025.025.625.425 1.025.45.45 1.05.45.6 0 1.05-.45ZM24 44q-4.25 0-7.9-1.525-3.65-1.525-6.35-4.225-2.7-2.7-4.225-6.35Q4 28.25 4 24q0-4.2 1.525-7.85Q7.05 12.5 9.75 9.8q2.7-2.7 6.35-4.25Q19.75 4 24 4q4.2 0 7.85 1.55Q35.5 7.1 38.2 9.8q2.7 2.7 4.25 6.35Q44 19.8 44 24q0 4.25-1.55 7.9-1.55 3.65-4.25 6.35-2.7 2.7-6.35 4.225Q28.2 44 24 44Z"/></svg>
    </a>
    <script src="js/index.js"></script>
</body>
</html>
