<button class="btn btn-outline-primary w-100 filter-toggle">Show Filters</button>
<div class="programs-leftbar">
    <h6 class="d-flex justify-content-between">
        Filter by <a href="#" class="text-danger small">Reset</a>
    </h6>
    <hr>

    <!-- Accordion programs-leftbar -->
    <div class="accordion" id="filterAccordion">

        <!-- Country -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCountry">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCountry">
                    {{-- <input type="checkbox" name="" id="selectAllCountries" class="filter-checkbox"> --}}
                    Country
                </button>
            </h2>
            <div id="collapseCountry" class="accordion-collapse collapse show" data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                    <!-- 🔍 Search box -->
                    <input type="text" id="countrySearch" class="form-control mb-2" placeholder="Search country...">

                    <div id="countryList">
                        @foreach ($countries as $item)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input filter-checkbox"
                                    value="{{ $item->name }}" id="{{ $item->name }}"
                                    {{ $item->name == 'Malaysia' ? 'checked' : '' }}>
                                <label class="form-check-label filter-label"
                                    for="{{ $item->name }}">{{ $item->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div>
                        @foreach ($countries as $item)
                            <input type="checkbox" class="filter-checkbox" value="{{ $item }}"
                                id="{{ $item->name }}" {{ $item->name == 'Malaysia' ? 'checked' : '' }}>
                            <label class="filter-label" for="{{ $item->name }}">{{ $item->name }}</label>
                            <br>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Institutes with search -->
        <div class="accordion-item">
            <h2 class="accordion-header d-flex justify-content-between align-items-center" id="headingInstitutes">
                <button class="accordion-button collapsed flex-grow-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseInstitutes">
                    <span>Institutes</span>
                    {{-- <img src="{{ asset('assets/home/icons/search.svg') }}" alt="" id="toggleInstituteSearch"
                        style=" cursor:pointer;"> --}}

                </button>
                {{-- <button class="btn btn-sm btn-light ms-2" >
                   
                </button> --}}
            </h2>
            <div id="collapseInstitutes" class="accordion-collapse collapse show" data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                    <!-- Search inside institutes -->
                    <input type="text" class="form-control form-control-sm search-institutes"
                        placeholder="Search institutes...">
                    <div class="mt-2">
                        @foreach ($universities as $item)
                            <div>
                                <input type="checkbox" value="{{ $item->id }}" id="university_{{ $item->id }}"
                                    class="filter-checkbox">
                                <label for="university_{{ $item->id }}"
                                    style="cursor: pointer">{{ $item->name }}</label>
                            </div>
                        @endforeach
                        {{-- <div><input type="checkbox"> Asia Pacific University</div> --}}
                        {{-- <div><input type="checkbox"> Taylor’s University</div>
                        <div><input type="checkbox"> Sunway University</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Programs -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingPrograms">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsePrograms">
                    Programs
                </button>
            </h2>
            <div id="collapsePrograms" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                    @foreach ($programs as $item)
                            <div>
                                <input type="checkbox" value="{{ $item->id }}" id=" program_{{ $item->id }}"
                                    class="filter-checkbox">
                                <label for="program_{{ $item->id }}"
                                    style="cursor: pointer">{{ $item->type }}</label>
                            </div>
                        @endforeach
                    {{-- <div><input type="checkbox"> Business</div>
                    <div><input type="checkbox"> Engineering</div>
                    <div><input type="checkbox"> IT</div> --}}
                </div>
            </div>
        </div>

        <!-- Tuition Fees -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFees">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFees">
                    Tuition Fees
                </button>
            </h2>
            <div id="collapseFees" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                    <div>
                        <input type="radio" name="fee" id="fee_0_1000" value="{{ json_encode(['min' => 0, 'max' => 1000]) }}">
                        <label for="fee_0_1000">RM 0 - RM 1000</label>
                    </div>
                    <div>
                        <input type="radio" name="fee" id="fee_1000_5000" value="{{ json_encode(['min' => 1000, 'max' => 5000]) }}">
                        <label for="fee_1000_5000">RM 1000 - RM 5000</label>
                    </div>
                    <div>
                        <input type="radio" name="fee" id="fee_5000_plus" value="{{ json_encode(['min' => 5000]) }}">
                        <label for="fee_5000_plus">RM 5000+</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intake Date -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingIntake">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseIntake">
                    Intake Date
                </button>
            </h2>
            <div id="collapseIntake" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                    <div><input type="checkbox"> Jan 2025</div>
                    <div><input type="checkbox"> May 2025</div>
                    <div><input type="checkbox"> Sep 2025</div>
                </div>
            </div>
        </div>

        <!-- Province -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingProvince">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseProvince">
                    Province
                </button>
            </h2>
            <div id="collapseProvince" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                <div class="accordion-body">
                    <div><input type="checkbox"> Kuala Lumpur</div>
                    <div><input type="checkbox"> Selangor</div>
                    <div><input type="checkbox"> Penang</div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            console.log("program filter");

            $('#countrySearch').on('keyup', function() {
                var searchText = $(this).val().toLowerCase();
                console.log(searchText);

                $('#countryList .form-check').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
                });
            });
        });
    </script>
@endpush
