<?php  include '../src/inc/header.php' ?>

<main style="margin-top: 58px">
    <div class="container table-responsive pt-4">

        <table class="table  caption-top">
            <caption><h2 ps-2>Użytkownicy</h2></caption>
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Numer telefonu</th>
                <th scope="col">NIP</th>
                <th scope="col">Adres</th>
                <th scope="col">Usługi</th>
                <th scope="col">Notatka</th>
                <th scope="col">Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jan</td>
                <td>Kowalski</td>
                <td>43432432</td>
                <td>000-000-000</td>
                <td>abc@abc.pl</td>
                <td>24.10.2022</td>
                <td>Domena</td>
                <td>Abcd</td>
                <td>
                    <a href="user_details.php">
                        <button type="button" class="btn btn-primary">Zobacz</button>
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jan</td>
                <td>Kowalski</td>
                <td>43432432</td>
                <td>000-000-000</td>
                <td>abc@abc.pl</td>
                <td>24.10.2022</td>
                <td>Domena</td>
                <td>Abcd</td>
                <td>
                    <a href="user_details.php">
                        <button type="button" class="btn btn-primary">Zobacz</button>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</main>

<?php  include '../src/inc/footer.php' ?>