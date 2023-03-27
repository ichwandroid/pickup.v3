<?php
include_once 'connect.php';
$data_user = mysqli_query($database, "SELECT * FROM tbl_scan");
?>

<!-- <h3 class="text-center mt-5">CRUD Ajax Sederhana</h3>

<table class="table table-bordered border-dark mt-5">
    <thead>
        <tr>
            <th style="display:none;">Id</th>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // $i = 1;
        // while ($data = mysqli_fetch_assoc($data_user)) {
        //     $link_delete = "<a class='btn btn-danger mb-1 hapusData' href='deleteData.php?id=" . $data['id'] . "'>Delete</a>";
        //     $link_update = "<a class='btn btn-warning mb-1 updateData' data-bs-toggle='modal' data-bs-target='#editData' href='updateData.php?id=" . $data['id'] . "'>Update</a>";
        ?>
            <tr>
                <td style="display:none;"><?php //echo $data['id']; ?></td>
                <td><?php //echo $i++; ?></td>
                <td><?php //echo $data['nama']; ?></td>
                <td><?php //echo $data['umur']; ?></td>
                <td><?php //echo $data['jenis_kelamin']; ?></td>
                <td><?php //echo "<center>$link_delete $link_update</center>"; ?></td>
            </tr>
        <?php //} ?>
    </tbody>
</table> -->

<table class="w-full whitespace-no-wrap">
    <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Client</th>
            <th class="px-4 py-3">Amount</th>
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
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Hans Burger</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              10x Developer
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 863.45
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Approved
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        6/10/2020
                      </td>
                    </tr>
                    <?php } ?>

                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Jolina Angelie</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Unemployed
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        $ 369.95
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                          Pending
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        6/10/2020
                      </td>
                    </tr>

                  </tbody>
                </table>