<main style="margin-top: 58px">
    <div class="container table-responsive pt-4">
        <?php  include '../src/inc/header.php' ?>

        <h1>Urlopy</h1>

        <table class="table table-sm table-light caption-top table-striped table-hover table-responsive">
            <caption><h2 class="ps-2">Wnioski</h2></caption>
            <thead class="table-light">
            <tr class="text-center" >
                <th scope="col">#</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">
                    Data utworzenia
                </th>
                <th scope="col">
                    Początek urlopu
                </th>
                <th scope="col">Koniec urlopu
                </th>
                <th scope="col">Ilość dni
                </th>
                <th scope="col">
                    Zatwierdzenie
                </th>
                <th scope="col">
                    Szczegóły pracownika
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <th scope="row">1</th>
                <td>Jan</td>
                <td>Kowalski</td>
                <td>21.10.2022</td>
                <td>21.10.2022</td>
                <td>21.10.2022</td>
                <td>3</td>
                <td><a href="client_details.php">
                        <button type="button" class="btn btn-success">y</button>
                    </a><a href="client_details.php">
                        <button type="button" class="btn btn-danger">x</button>
                    </a></td>
                <td>
                    <a href="client_details.php">
                        <button type="button" class="btn btn-primary">Zobacz</button>
                    </a>
                </td>
            </tr>


            </tbody>
        </table>

        <table class="table table-sm table-light caption-top table-striped table-hover table-responsive">
            <caption><h2 class="ps-2">Zatwierdzone urlopy</h2></caption>
            <thead class="table-light">
            <tr class="text-center" >
                <th scope="col">#</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">
                    Data zatwierdzenia
                </th>
                <th scope="col">
                    Początek urlopu
                </th>
                <th scope="col">Koniec urlopu
                </th>
                <th scope="col">Ilość dni
                </th>
                <th scope="col">
                    Edycja
                </th>
                <th scope="col">
                    Szczegóły pracownika
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <th scope="row">1</th>
                <td>Jan</td>
                <td>Kowalski</td>
                <td>21.10.2022</td>
                <td>21.10.2022</td>
                <td>21.10.2022</td>
                <td>3</td>
                <td><a href="client_details.php">
                        <button type="button" class="btn btn-primary">Edytuj</button>
                    </a><a href="client_details.php">
                        <button type="button" class="btn btn-danger">Usuń</button>
                    </a></td>
                <td>
                    <a href="client_details.php">
                        <button type="button" class="btn btn-primary">Zobacz</button>
                    </a>
                </td>
            </tr>


            </tbody>
        </table>


    </div>
</main>

</body>
