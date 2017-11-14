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
        <?php foreach ($data['data'] as $doctor) : ?>
            <tr>
                <td><?= $doctor->doc_name; ?></td>
                <td><?= $doctor->doc_surname; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Add new doctor</h1>

    <form action="/doctors" method="post">
        First name: <input type="text" name="doc_name"><br/>
        Last name: <input type="text" name="doc_surname"><br/>
        <input type="submit" value="Submit">
    </form>

    <p id="error" class="err"><?php if ($data['err'] != '') echo "{$data['err']}"; ?></p>

<?php require('partials/footer.php'); ?>