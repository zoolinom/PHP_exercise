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

<?php require('partials/footer.php'); ?>
