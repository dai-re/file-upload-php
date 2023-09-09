<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/i-index.css" type="text/css" media="all" />
    <title>DE file upload | list</title>
  </head>
  <body class="w-screen h-screen flex flex-col justify-center items-center">
    <div class="container-upload flex flex-col justify-center items-center">
      <h2 class="font-bold text-3xl"><span class="text-red-600">DE</span> Upload File | List</h2>
      <div class="w-72">
      <div class="bg-teal-500 text-white font-bold rounded-t px-4 py-2">
       File
      </div>
      <ul class="border border-t-0 border-teal-100 rounded-b bg-teal-100 px-4 py-3 text-teal-500">
        <?php
        $folderPath = "./uploads";
        $files = scandir($folderPath);
        foreach ($files as $file) {
          if ($file != "." && $file != "..") {
            // Membuat tautan ke file yang dapat diunduh
            $filePath = $folderPath . "/" . $file;
            echo "<li class='list-disc ml-1'><a class='text-teal-500' href='$filePath' download>$file</a></li>";
          }
        }
        ?>
        </ul>
      </div>
    </div>
    <a href="/upload.html" class="flex justify-center items-center mt-2 fill-current fill-teal-500">
      <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" height="1.5em" width="1.5em"><path d="M23 30.3q.4.4 1.025.375.625-.025 1.025-.425.45-.45.45-1.05 0-.6-.45-1.05L22.4 25.5h7.65q.6 0 1.025-.45.425-.45.425-1.05 0-.65-.425-1.075Q30.65 22.5 30 22.5h-7.6l2.7-2.7q.4-.4.375-1.025-.025-.625-.425-1.025-.45-.45-1.05-.45-.6 0-1.05.45l-5.2 5.2q-.45.45-.45 1.05 0 .6.45 1.05ZM24 44q-4.25 0-7.9-1.525-3.65-1.525-6.35-4.225-2.7-2.7-4.225-6.35Q4 28.25 4 24q0-4.2 1.525-7.85Q7.05 12.5 9.75 9.8q2.7-2.7 6.35-4.25Q19.75 4 24 4q4.2 0 7.85 1.55Q35.5 7.1 38.2 9.8q2.7 2.7 4.25 6.35Q44 19.8 44 24q0 4.25-1.55 7.9-1.55 3.65-4.25 6.35-2.7 2.7-6.35 4.225Q28.2 44 24 44Z"/></svg>
      upload
    </a>
  </body>
</html>