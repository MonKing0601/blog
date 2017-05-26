<center>
        <h1>系统信息</h1>
        <table width="70%" border="0" cellpadding="5" cellspacing="5" bgcolor="#cccccc" >
            <tr>
                <th>操作系统</th>
                <td><?php echo PHP_OS?></td>
            </tr>
            <tr>
                <th>Apache版本</th>
                <td><?php echo apache_get_version()?></td>
            </tr>
            <tr>
                <th>PHP版本</th>
                <td><?php echo  PHP_VERSION?></td>
            </tr>
            <tr>
                <th>运行方式</th>
                <td><?php echo PHP_SAPI?></td>
            </tr>
        </table>
        <h1>软件信息</h1>
        <table width="70%" border="0" cellpadding="5" cellspacing="5" bgcolor="#cccccc">
            <tr>
                <th>系统名称</th>
                <td>blog博客系统</td>
            </tr>
            <tr>
                <th>开发</th>
                <td>Monking</td>
            </tr>
            <tr>
                <th>网址</th>
                <td>以后告诉你</td>
            </tr>
            <tr>
                <th>时间</th>
                <td><?php echo date("Y:m:d H:i:s")?></td>
            </tr>
        </table>
    </center>





