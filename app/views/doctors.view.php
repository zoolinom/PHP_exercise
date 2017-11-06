<!--
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/28/2017
 * Time: 8:30 PM
 */
 -->

<?php require('partials/head.php'); ?>

    <h1>Doctors table</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php foreach ($data as $doctor) : ?>
            <tr>
                <td><?= $doctor->doc_name; ?></td>
                <td><?= $doctor->doc_surname; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php require('partials/footer.php'); ?>