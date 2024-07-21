@extends('home.home')

@section('content')
    <div class="text" style="z-index: -10">Flight Post Create && Uploading Flight Information</div>
    <div class="home_content" style="z-index: 1000">
        <div>
            <form action="{{ route('add#flight') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">

                            <div class="mb-4 form-floating">
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    id="floatingInput" placeholder="Lesson Cartoon" name="date" />
                                <label for="floatingInput">Date</label>
                                @error('date')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>

                            <div class="mt-3 mb-4 form-floating">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="floatingInput" placeholder="image" name="image" />
                                <label for="floatingInput">Image</label>
                                @error('image')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>

                            <div class="mb-4 form-floating">
                                <input  type="time" class="form-control @error('fromTime') is-invalid @enderror"
                                    id="floatingInput" placeholder="From time" name="fromTime" />
                                <label for="floatingInput">From Time</label>
                                @error('fromTime')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>

                            <div class="mt-3 mb-4 form-floating">
                                <input type="time" class="form-control @error('toTime') is-invalid @enderror"
                                    id="floatingInput" placeholder="Enter Teacher Name" name="toTime" />
                                <label for="floatingInput">To Time</label>
                                @error('toTime')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>

                            <div class="mt-3 mb-4 form-floating">
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    id="floatingInput" placeholder="Enter Price" name="price" />
                                <label for="floatingInput">Price</label>
                                @error('price')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>

                        </div>

                        <div class="col-6">

                            <div class="mt-3 mb-4 ">
                                <label for="floatingInput">From</label>
                                <select type="text"
                                    class="form-select form-select-lg @error('from') is-invalid @enderror" name="from">
                                    <option>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                @error('from')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>

                            <div class="mt-3 mb-4">
                                <label for="floatingInput">To</label>
                                <select class="form-select form-select-lg @error('to') is-invalid @enderror" name="to">
                                    <option >Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                @error('to')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>


                            <div class="mt-3 mb-4 ">
                                <label for="floatingInput">Flight Name</label>
                                <select type="text"
                                    class="form-select form-select-lg @error('class') is-invalid @enderror" name="class">
                                    <option >Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                @error('class')
                                    <small class="text-danger">*required</small>
                                @enderror
                            </div>


                        </div>
                    </div>

                    <div class="">
                        <div class="text-center">
                            <button type="submit" class="mt-3 btn btn-success col-6">Upload</button>
                        </div>
                    </div>
                </div>
            </form>

            <h3 class="m-4"><u>Daily flight Update</u></h3>
            <table class="table m-4 table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Trip</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Name</th>
                        <th scope="col">FromTime</th>
                        <th scope="col">toTime</th>
                        <th scope="col">price</th>
                        <th scope="col">Class</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">#</th>
                        <td class="text-break"></td>
                        <td class="text-break"></td>
                        <td class="text-break"></td>
                        <td class="text-break"></td>
                        <td>
                        </td>
                        <td class="text-break"></td>
                        <td class="text-break"></td>
                        <td class="text-break"></td>
                    </tr>


                </tbody>
            </table>

        </div>
    </div>
@endsection
