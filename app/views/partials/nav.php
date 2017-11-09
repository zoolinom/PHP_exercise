<!--
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/28/2017
 * Time: 7:24 PM
 */
-->

<nav>
    <ul>
        <li><a <?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == '') echo 'class="active"'; ?> href="/">Home</a></li>
        <li><a <?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == 'patients') echo 'class="active"'; ?> href="/patients">Patients</a></li>
        <li><a <?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == 'doctors') echo 'class="active"'; ?> href="/doctors">Doctors</a></li>
        <li><a <?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == 'records') echo 'class="active"'; ?> href="/records">Records</a></li>
    </ul>
</nav>