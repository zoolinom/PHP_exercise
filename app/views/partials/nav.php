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
        <li><a id="tab1" class="<?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == '') echo 'active' ?>" href="/">Home</a></li>
        <li><a id="tab2" class="<?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == 'patients') echo 'active' ?>" href="/patients">Patients</a></li>
        <li><a id="tab3" class="<?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == 'doctors') echo 'active' ?>" href="/doctors">Doctors</a></li>
        <li><a id="tab4" class="<?php if (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') == 'records') echo 'active' ?>" href="/records">Records</a></li>
    </ul>
</nav>