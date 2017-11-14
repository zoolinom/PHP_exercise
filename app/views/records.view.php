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

    <h1>Insert new record</h1>

    <form action="/records" method="post">
        Record type: <input type="text" name="rec_type"><br/>
        Select patient: <select name="patient_id">
            <?php foreach ($database['patients'] as $pat_data): ?>
                <option value="<?= $pat_data->id; ?>"><?= "{$pat_data->id}, {$pat_data->pat_name}, {$pat_data->pat_surname}" ?></option>
            <?php endforeach; ?>
        </select><br/>
        Select doctor: <select name="doctor_id">
            <?php foreach ($database['doctors'] as $doc_data): ?>
                <option value="<?= $doc_data->id; ?>"><?= "{$doc_data->id}, {$doc_data->doc_name}, {$doc_data->doc_surname}" ?></option>
            <?php endforeach; ?>
        </select><br/>
        <input type="submit" value="Submit">
    </form>

    <p id="error" class="err">Text</p>

<?php require('partials/footer.php'); ?>