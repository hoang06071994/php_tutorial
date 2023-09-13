<?php
if (!defined('_INCODE')) die('Access dined...');
/*list users
*/

$data = [
    'pageTitle' => 'list'
];
layout('header', $data);

// get all data
$listAll = getRaw("SELECT * FROM users ORDER BY updateAt");

?>
    <div class='container'>
        <h1>page user</h1>
        <div class="d-flex justify-content-between ">
            <p>
                <a href="#" class="btn btn-success btn-lg">
                    + add user
                </a>
            </p>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search users" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <table class="table table-boreder">
            <thead>
                <tr>
                    <th whidth="5%">STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th width="5%">Update</th>
                    <th width="5%">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($listAll)):
                        $count = 0;
                        foreach($listAll as $item):
                            $count++;
                ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $item['fullname'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td><?php echo $item['phone'] ?></td>
                    <td>
                        <?php echo $item['status'] == 1
                            ? '<button type="button" class="btn btn-success btn-sm">Active</button>'
                            : '<button type="button" class="btn btn-secondary  btn-sm">No Active</button>'; 
                        ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                    <tr>
                        <td colspan="7">
                            <div class="alert alert-danger text-center ">
                                no user
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php

layout('footer');