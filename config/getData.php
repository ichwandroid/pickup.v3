<?php include_once 'connect.php';
  $data_user = mysqli_query($database, "SELECT * FROM tbl_scan");
?>

<table class="w-full whitespace-no-wrap">
    <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Student</th>
            <th class="px-4 py-3">Class</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Date</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        <?php
        $i = 1;
        while ($data = mysqli_fetch_assoc($data_user)) {
            $link_delete = "<a class='btn btn-danger mb-1 hapusData' href='deleteData.php?id=" . $data['NIS'] . "'>Delete</a>";
            $link_update = "<a class='btn btn-warning mb-1 updateData' data-bs-toggle='modal' data-bs-target='#editData' href='updateData.php?id=" . $data['NIS'] . "'>Update</a>";
        ?>
        <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3"><?php echo $data['NIS']; ?>
              <div class="flex items-center text-sm">
                <!-- Avatar with inset shadow -->
                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y" alt="" loading="lazy"/>
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold">Hans Burger</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">$ 863.45</td>
            <td class="px-4 py-3 text-xs">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Approved</span>
            </td>
            <td class="px-4 py-3 text-sm">6/10/2020</td>
          </tr>
          
          <?php } ?>
          
    </tbody>
</table>
