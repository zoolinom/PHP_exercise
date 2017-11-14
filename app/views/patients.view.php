<!--
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/28/2017
 * Time: 7:12 PM
 */
-->

<?php require('partials/head.php'); ?>

    <h1>Patients table</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>JMBG</th>
        </tr>
        <?php foreach ($data as $patient) : ?>
            <tr>
                <td><?= $patient->pat_name; ?></td>
                <td><?= $patient->pat_surname; ?></td>
                <td><?= $patient->JMBG; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Add new patient</h1>

    <form action="/patients" method="post">
        First name: <input type="text" name="pat_name"><br/>
        Last name: <input type="text" name="pat_surname"><br/>
        JMBG: <input type="text" name="jmbg"><br/>
        <input type="submit" value="Submit">
    </form>

    <p id="error" class="err">Text</p>

<?php require('partials/footer.php'); ?>
