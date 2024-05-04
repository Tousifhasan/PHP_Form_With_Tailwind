<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <title>Tailwind PHP Form</title>
</head>
<body class="bg-gray-200 p-6">
    <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
        <h2 class="text-2xl font-semibold md-4">Example From</h2>

        <?php

            if($_SERVER["REQUEST_METHOD"]==="POST"){
                $name =isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
                $gender = isset($_POST["gender"]) ?htmlspecialchars($_POST["gender"])  : "";
                $subscribe = isset($_POST["subscribe"]) ? $_POST["subscribe"] : [];
                $datepicker = isset($_POST["datepicker"]) ? htmlspecialchars($_POST["datepicker"]) : "";
                $timepicker = isset($_POST["timepicker"]) ? htmlspecialchars($_POST["timepicker"]) : "";
                $options = isset($_POST["options"]) ? $_POST["options"] : [];
                $country =isset($_POST["country"]) ?  htmlspecialchars($_POST["country"]) : "";

            }

            echo "<div class='mb-6'>";
            echo "<ul>";
            echo "<li><strong> Name: </strong>".$name."</li>";
            echo "<li><strong>Gender:</strong>". $gender ."</li>";
            echo"<li><strong>Subscribe:</strong>".implode(", ",$subscribe) ."</li>";
            echo "<li><strong>Date:</strong>".$datepicker ."</li>";
            echo  "<li><strong>Time:</strong>".$timepicker ."</li>";
            echo "<li><strong>Options:</strong>".implode(", ",$options) ."</li>";
            echo"<li><strong>Country:</strong>".$country."</li>";
            echo "</ul>";
            echo "</div>";

            // if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //     $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
            //     $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
            //     $subscribe = isset($_POST["subscribe"]) ? $_POST["subscribe"] : [];
            //     $datepicker = isset($_POST['datepicker']) ? htmlspecialchars($_POST['datepicker']) : '';
            //     $timepicker = isset($_POST['timepicker']) ? htmlspecialchars($_POST['timepicker']) : '';
            //     $options = isset($_POST['options']) ? $_POST['options'] : [];
            //     $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
            // }

            // echo '<div class="mb-6">';
            // echo '<ul>';
            // echo '<li><strong>Name:</strong> '.$name.'</li>' ;
            // echo '<li><strong>Gender:</strong> '.$gender.'</li>' ;
            // echo '<li><strong>Subscribe:</strong> '.implode(', ', $subscribe).'</li>' ;
            // echo '<li><strong>Datepicker:</strong> '.$datepicker.'</li>' ;
            // echo '<li><strong>Timepicker:</strong> '.$timepicker.'</li>' ;
            // echo '<li><strong>Options:</strong> '. implode(',',$options).'</li>' ;
            // echo '<li><strong>Country:</strong> '.$country.'</li>' ;
            // echo '</ul>';
            // echo '</div>';


        ?>
    
        <form action="#" method="POST">
            <!-- Text input -->
            <div class="md-4">
                <label for="name"  class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" id="name" value="<?php echo $name; ?>" name="name" class="mt-1 p-2 w-2 w-full border rounded-md">
            </div>
    
            <!-- Radio Buttons -->
            <div class="md-4">
                <label for="gender" class="block text-sm font-medium text-gray-600">Gender</label>
                <div class="mt-1 space-x-4">
                    <label for="inline-flex items-center">
                        <input type="radio" name="gender" value="male" class="from-radio text-indigo-600" <?php echo $gender==="male" ? "checked" : '' ?> >
                        <span class="ml-2">Male</span>
                    </label>
                    <label for="inline-flex items-center">
                        <input type="radio" name="gender" value="female" class="from-radio text-indigo-600" <?php echo $gender ==="female" ? "checked" : "" ?>>
                        <span class="ml-2">Female</span>
                    </label>
                </div>
            </div>

            <!-- Multi-checkbox -->
              <div class="mb-4">
                <label for="subscribe"  class="block text-sm font-medium text-gray-600">Subscribe to Newsletter</label>
                <div class="space-y-2">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="subscribe[]" value="Learing PHP" class="form-checkbox text-indigo-600" <?php echo in_array("Learing PHP",$subscribe) ? "checked" : " "; ?>>
                        <span class="ml-2">Learing PHP</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="subscribe[]" value="Coding PHP Form" class="form-checkbox text-indigo-600"<?php echo in_array("Coding PHP Form",$subscribe) ? "checked" : " "; ?>>
                        <span class="ml-2">Coding PHP Form</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="subscribe[]" value="PHP is FUN"  class="form-checkbox text-indigo-600"<?php echo in_array("PHP is FUN",$subscribe) ? "checked" : " "; ?>>
                        <span class="ml-2">PHP is FUN</span>
                    </label>
                </div>
            </div>
            <!-- Date Picker -->
        <div class="mb-4">
            <label for="datepicker" class="block text-sm font-medium text-gray-600">Pick a Date</label>
            <input type="text" id="datepicker" value="<?php echo $datepicker; ?>" name="datepicker" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <!-- Time Picker -->
        <div class="mb-4">
            <label for="timepicker" class="block text-sm font-medium text-gray-600">Pick a Time</label>
            <input type="text" id="timepicker" value="<?php echo $timepicker; ?>" name="timepicker" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <!-- Multiselect Dropdown using Select2 -->
            <div class="mb-4">
                <label for="options" class="block text-sm font-medium text-gray-600">Select Options</label>
                <select id="options" name="options[]" class="mt-1 p-2 w-full border rounded-md" multiple>
                    <option value="HTML-5"<?php echo in_array("HTML-5",$options) ? "selected" : '' ;?>>HTML-5</option>
                    <option value="Tailwind"<?php echo in_array("Tailwind",$options) ? "selected" : ""; ?>>Tailwind</option>
                    <option value="Raw PHP"<?php echo in_array("Raw PHP",$options)? "selected" : ""; ?>>Raw PHP</option>
                    <option value="CSS"<?php echo in_array("CSS",$options) ? "selected" : '' ;?>>CSS</option>
                    <option value="Javascript"<?php echo in_array("Javascript",$options) ? "selected" : '' ;?>>Javascript</option>
                    <option value="Backend Connect"<?php echo in_array("Backend Connect",$options) ? "selected" : '' ;?>>Backend Connect</option>
                </select>
            </div>
       <!-- Select Dropdown -->
            <div class="mb-4">
                <label for="country" class="block text-sm font-medium text-gray-600">Country</label>
                <select id="country" name="country" class="mt-1 p-2 w-full border rounded-md">
                    <option value="Bangladesh" <?php echo ($country == "Bangladesh")? "checked" : ""; ?>>Bangladesh</option>
                    <option value="Hogward"<?php echo ($country =="Hogward") ? "selected" : ''; ?>>Wizarding World</option>
                    <option value="uk"<?php echo ($country =="uk") ? "selected" : ''; ?>>United Kingdom</option>
                    <option value="usa"<?php echo ($country =="usa") ? "selected" : ''; ?>>America</option>
                    <option value="canada"<?php echo ($country =="canada") ? "selected" : ''; ?>>Canada</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="bg-indigo-600 text-white p-2 rounded-md">Submit</button>
            </div>
        </form>
    </div>   


    <script>
        // Initialize Flatpickr for the date and time pickers
        flatpickr("#datepicker", {
            enableTime: false,
            dateFormat: "Y-m-d",
        });
    </script>

    <script>
         // Initialize Flatpickr for the date and time pickers
        flatpickr("#datepicker", {
            enableTime: false,
            dateFormat: "Y-m-d",
        });

        flatpickr("#timepicker",{
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        });
    </script>
    
<script>
    // Initialize Select2 for the multiselect dropdown
    $(document).ready(function() {
        $('#options').select2();
    });
</script>
</body>
</html>
