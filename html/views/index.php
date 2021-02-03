<h3 class="uk-heading-line">
    <span>Student Information Management</span>
</h3>
<?php if (!empty($data)) { ?>
    <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
        <thead>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $v) { ?>
            <tr>
                <td><?php __($v['no']); ?></td>
                <td><?php __($v['name']); ?></td>
                <td><?php __($v['gender'] === 0 ? '男' : '女'); ?></td>
                <td><?php __($v['phone']); ?></td>
                <td><a href="/edit?id=<?php __($v['id']); ?>">Modify</a> / <a href="/delete?id=<?php __($v['id']); ?>"
                                                                          class="uk-text-danger">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    <p class="uk-text-center uk-muted-text">There is no student information in the database yet~</p>
    <p class="uk-text-center"><a class="uk-primary-text" href="/add">Add one</a></p>
<?php } ?>
