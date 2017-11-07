<!--
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/29/2017
 * Time: 9:13 PM
 */
 -->

<?php require('partials/head.php'); ?>

    <h1>Records table</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Record type</th>
            <th>Patient name</th>
            <th>Patient surname</th>
            <th>Doctor name</th>
            <th>Doctor surname</th>
        </tr>
        <?php foreach ($data as $record) : ?>
            <tr>
                <td><?= $record->id; ?></td>
                <td><?= $record->record_type; ?></td>
                <td><?= $record->pat_name; ?></td>
                <td><?= $record->pat_surname; ?></td>
                <td><?= $record->doc_name; ?></td>
                <td><?= $record->doc_surname; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php require('partials/footer.php'); ?>