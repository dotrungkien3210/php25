                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">User</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>NAME</th>
                                                <th>DESCRIPTION</th>
                                                <th class="text-right">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          
                                            <tr>
                                                <td><?php echo $users[0]['users_id'];  ?></td>
                                                <td><?php echo $users[0]['users_name'];  ?></td>
                                                <td><?php echo $users[0]['users_description'];  ?></td>
                                                <td>
<a href="index.php?mod=admin&c=user&act=list" class="btn btn-primary">Back</a>
                                               </td>
                                            </tr>
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                            
                        </div>