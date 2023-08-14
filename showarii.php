<!-- Read file -->

<?php
// http://localhost/learnPhp/showbay/showarii.php
$file = 'text-air.csv';
if (file_exists($file)) {
    if ($open = fopen($file, 'r')) {
        fgetcsv($open);
        while (($data = fgetcsv($open, 1000, ',')) !== false) {
            $arr[] = $data;
        }
        $temp = array_slice($arr, 0);
        fclose($open);
    } else {
        echo "Error: Unable to open the file.";
    }
} else {
    echo "Error: File doesn't exist.";
}
?>

<!-- Filter -->

<?php
if (isset($_POST['brands'])) {
    $arr = array_filter($arr, function ($brand) {
        return in_array($brand[1], $_POST['brands']);
    });
} 

if (isset($_POST['sort'])) {
    if ($_POST['sort'] == '2') {
        usort($arr, function ($a, $b) {
            return strcmp($a[3], $b[3]);
        });
    } else {
        usort($arr, function ($a, $b) {
            return strcmp($a[9], $b[9]);
        });
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="dark:bg-white">

    <div class=" bg-white dark:bg-green-100 ">
        <nav class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4">
            <!-- For large and Medium-sized Screen -->
            <div class="flex justify-between ">
                <div class="hidden sm:flex flex-row items-center space-x-6">
                    <img class="dark:bg-white p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer w-7 h-7 "
                        src="https://d1fdloi71mui9q.cloudfront.net/8Ei0uaL8S6eQPaclkv0i_5BqoU5DWvVXltoPS"
                        alt="twitter" />
                    <img class="dark:bg-white p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer w-7 h-7 "
                        src="https://www.verfvanniveau.nl/wp-content/uploads/2019/08/logo-social-fb-facebook-icon.png"
                        alt="facebook" />
                    <img class="dark:bg-white p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer w-7 h-7 "
                        src="https://th.bing.com/th/id/R.6f9a03bd4554e5454de1c79f4c91aadf?rik=0c%2fLPEw2uBblNg&pid=ImgRaw&r=0"
                        alt="linkdin" />
                    <img class="dark:bg-white p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer w-7 h-7 "
                        src="https://th.bing.com/th/id/R.26d9974a1feec9905a4e0d5e5ddf8db6?rik=ycoXFwG5Udz08A&pid=ImgRaw&r=0"
                        alt="instagram" />
                </div>
                <div class=" flex space-x-3 items-center">
                    <img class="p-1 dark:bg-white rounded-full w-20 flex justify-center items-center"
                        src="./Fashion Boutique font logo.png" alt="circle" />
                    <h1 class=" font-normal text-2xl leading-6 text-gray-800 dark:text-black ">Vé máy bay trực tuyến Tài
                        Lâm </h1>
                </div>
                <div class="hidden sm:flex flex-row space-x-4">
                    <button
                        class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-red-700 hover:text-white bg-white border border-red-700 focus:outline-none focus:bg-red-500 hover:bg-red-500 duration-150 justify-center items-center">Sign
                        Up</button>
                    <button
                        class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-red-600 duration-150 justify-center items-center">Sign
                        In</button>
                </div>

                <!-- Burger Icon -->
                <div id="bgIcon" onclick="toggleMenu()"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800  flex justify-center items-center sm:hidden cursor-pointer">
                    <img class="dark:bg-white" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg6.svg"
                        alt="burger" />
                    <img class="dark:bg-white hidden"
                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg7.svg" alt="cross" />
                </div>
            </div>

            <!-- Mobile and small-screen devices (toggle Menu) -->
            <div id="MobileNavigation" class="hidden sm:hidden mt-4 mx-auto">
                <div class="flex flex-row items-center justify-center space-x-6">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />
                </div>
                <div class="flex flex-col gap-4 mt-4 w-80 mx-auto ">
                    <button
                        class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-indigo-700 bg-indigo-600 bg-opacity-0 hover:opacity-100 duration-100 border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center">Sign
                        Up</button>     
                    <button
                        class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center">Sign
                        In</button>
                </div>
            </div>
        </nav>
    </div>

    <div class="w-full sm:p-6">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-orange-200 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-black ">
                    Chọn chuyến bay</p>

            </div>
        </div>
        <div class="bg-white dark:bg-orange-100  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr>
                        <form method="post" action="">
                            <td colspan="5">
                                <input type="checkbox" name="all" id="all" <?php if (empty($_POST['brands']))
                                    echo 'checked'; ?>>Tất cả
                                <input type="checkbox" name="brands[]" value="Vietjet Air" class="brand" <?php if (isset($_POST['brands']) && in_array('Vietjet Air', $_POST['brands']))
                                    echo 'checked'; ?>>Vietjet Air
                                <input type="checkbox" name="brands[]" value="Bamboo Airways" class="brand" <?php if (isset($_POST['brands']) && in_array('Bamboo Airways', $_POST['brands']))
                                    echo 'checked'; ?>>Bamboo Airways
                                <input type="checkbox" name="brands[]" value="Pacific Airline" class="brand" <?php if (isset($_POST['brands']) && in_array('Pacific Airline', $_POST['brands']))
                                    echo 'checked'; ?>>Pacific Airline
                                <input type="checkbox" name="brands[]" value="Vietnam Airlines" class="brand" <?php if (isset($_POST['brands']) && in_array('Vietnam Airlines', $_POST['brands']))
                                    echo 'checked'; ?>>Vietnam Airlines
                                <select name="sort">
                                    <option value="1" <?php if (isset($_POST['sort']) && $_POST['sort'] == '1')
                                        echo 'selected'; ?>>Giá</option>
                                    <option value="2" <?php if (isset($_POST['sort']) && $_POST['sort'] == '2')
                                        echo 'selected'; ?>>Thời gian bay</option>
                                </select>
                                <input type="submit" name="submit" value="Tìm kiếm"
                                    class="rounded-md space-x-2 w-24 h-10 font-normal float-right text-sm leading-3 text-red-700 hover:text-white bg-white border border-red-700 focus:outline-none focus:bg-red-500 hover:bg-red-500 duration-150 justify-center items-center">
                            </td>
                        </form>
                    </tr>
                    <tr tabindex="0"
                        class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-black ">
                        <th class="font-normal pl-4">Hãng máy bay</th>
                        <th class="font-normal text-left pl-12">Điểm đi</th>
                        <th class="font-normal pl-12">Mã chuyến bay</th>
                        <th class="font-normal text-left pl-20">Điểm đến</th>
                        <th class="font-normal pl-20">Giá tiền</th>

                    </tr>
                </thead>
                <tbody class="w-full">
                    <?php
                    
                    foreach ($arr as $key) {
                        if(!empty($key[0]) && !empty($key[1]) && !empty($key[2]) && !empty($key[3]) && !empty($key[4]) && !empty($key[5]) && !empty($key[6]) && !empty($key[7]) && !empty($key[8])){
                            echo '<tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-black bg-white hover:bg-gray-100 dark:hover:bg-orange-100 border-b border-t border-gray-100 dark:border-gray-700">';
                            echo '<td class="pl-4 cursor-pointer"><div class="flex items-center">';
                            echo '<div class="pl-4 block">';
                            echo '<img src="' . $key[0] . '" class="w-32" alt="">';
                            echo '<p class="font-medium flex justify-center">' . $key[1] . '</p>';
                            echo '</div></div></td>';
                            echo '<td class="pl-12"><p class="font-normal text-xl leading-none text-gray-800 dark:text-black">' . $key[2] . '</p>';
                            echo '<p class="font-medium text-3xl leading-none text-gray-800 dark:text-black">' . $key[3] . '</p></td>';
                            echo '<td class="pl-12 text-green-500">';
                            echo '<p class="font-medium text-center">' . $key[4] . '</p>';
                            echo '<div class="w-80% bg-green-500 my-2" style="height: 1px;"></div>';
                            echo '<p class="font-normal text-sm leading-none text-green-500 dark:text-black text-center">Chi tiết</p>';
                            echo '</td>';
                            echo '<td class="pl-20"><p class="font-normal text-xl leading-none text-gray-800 dark:text-black">' . $key[6] . '</p>';
                            echo '<p class="font-medium text-3xl leading-none text-gray-800 dark:text-black">' . $key[7] . '</p></td>';
                            echo '<td class="pl-20 text-center">';
                            echo '<p class="font-medium text-2xl leading-none text-green-500 mb-2">' . $key[8] . '</p>';
                            echo '<a href=""><button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-red-700 hover:bg-red-600 focus:outline-none rounded">';
                            echo '<p class="text-sm font-medium leading-none text-white">Chọn chuyến bay</p>';
                            echo '</button></a></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const all = document.getElementById("all");
        const brands = document.getElementsByClassName("brand");

        all.addEventListener("click", function () {
            if (all.checked) {
                for (let i = 0; i < brands.length; i++) {
                    brands[i].checked = false;
                }
            }
        });
        for (let i = 0; i < brands.length; i++) {
            brands[i].addEventListener("click", function () {
                if (this.checked && all.checked) {
                    all.checked = false;
                }
            });
        }
    </script>
</body>