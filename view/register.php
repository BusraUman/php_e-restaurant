<div class="col-sm-6">
    <h1>Personel Kayıt</h1>
    <form action="<?=$sitePath?>userTasks.php" method="POST">
        <table class="table table-bordered table-striped">
            <thead>
            <tr class="bg-success">
                <th colspan="2">Yeni Personel Kayıt</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    Kullanıcı Adı:
                </td>
                <td class="text-center">
                    <label>
                        <input type="text" name="username" class="form-control"/>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    Şifre:
                </td>
                <td class="text-center ">
                    <label>
                        <input type="password" name="password" class="form-control"/>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    Personel Adı ve Soyadı:
                </td>
                <td class="text-center">
                    <label>
                        <input type="text" name="name" class="form-control"/>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    Kullanıcı Yetki (Pozisyon):
                </td>
                <td class="text-center">
                    <label>
                        <select class="form-control">
                            <option>Admin</option>
                            <option>Genel Sorumlu</option>
                            <option>Garson</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td class="text-center">
                    <label>
                        <input class="btn btn-warning" type="submit" name="submit" value="Personel Kaydını Bitir"/>
                    </label>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>