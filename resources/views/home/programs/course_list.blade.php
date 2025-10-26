@foreach ($universities as $university)
    @if ($university->universityCourses->count() > 0)
        <div class="university-card-item">
            <h5>
                <img class="university-logo" src="{{ $university->logo->getUrl() }}" alt="{{ $university->name }}">
                {{ $university->name }}
                @if ($university->code)
                    ({{ $university->code }})
                @endif
            </h5>

            @foreach ($university->universityCourses as $course)
                <div class="card program-card">
                    <div class="card-body">
                        {{-- <div class="border p-3 rounded mb-2"> --}}
                        <div class="d-flex align-items-center justify-content-between course-info">
                            <div>
                                <h6 class="program-title">{{ $course->name }}</h6>
                                <div class="program-meta d-flex">
                                    <div class="program-date-container-open" style="border-right: 1px solid #ccc;">
                                        Open:
                                        <span class="date">
                                            {{ \Carbon\Carbon::parse($course->opening_date)->format('M d') }}
                                        </span>
                                    </div>
                                    <div class="program-date-container-close">
                                        Closed:
                                        <span class="date">
                                            {{ \Carbon\Carbon::parse($course->closing_date)->format('M d') }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            @php
                                $applied = false;
                                if (Auth::guard('student')->user()) {
                                    $authUserId = Auth::guard('student')->user()->id;
                                    $courseStudents = $course->courseStudents;
                                    // dd($courseStudents);

                                    $courseStudentIds = $courseStudents->pluck('id')->toArray();
                                    // dd($courseStudentIds);

                                    if (in_array($authUserId, $courseStudentIds)) {
                                        $applied = true;
                                    }
                                }

                            @endphp

                            @if (!$applied)
                                <div class="col-md-4 text-end actions">
                                    <button class="btn btn-nd btn-round btn-not-primary" id="bookmarkBtn"
                                        data-action="bookmark">
                                        <i class="fa-regular fa-bookmark"></i>
                                        {{-- <i class="fa-solid fa-bookmark"></i> --}}
                                    </button>
                                    <button class="btn btn-md btn-round btn-not-primary" id="checkEligibilityBtn"
                                        type="button" data-action="checkEligibility">
                                        Check Eligibility
                                    </button>
                                    <button class="btn btn-primary btn-md btn-round btn-apply" id="applyBtn"
                                        type="button" data-program-id={{ $course->id }} data-action="applyNow">
                                        Apply Now
                                    </button>

                                </div>
                            @endif

                            <span class="applied_message"
                                style="display: {{ !$applied ? 'none' : 'block' }};">Applied</span>

                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex mt-2 gap-5">
                                <div class="d-flex align-items-center">
                                    <div class="bg-gray-circle">
                                        <img src="{{ asset('assets/images/rm_image_130.svg') }}" alt=""
                                            srcset="">
                                    </div>
                                    <div>
                                        <strong><span class="">RM</span>
                                            {{ $course->total_fees }}</strong> <br>
                                        <small class="text-secondary">Total tuition Fee</small>
                                    </div>
                                </div>
                                @php
                                    $year_fees = $course->year_fees;
                                    $year_fees = json_decode($year_fees, true);
                                    // echo $year_fees['1st_year_fees'];
                                @endphp
                                @if (isset($year_fees['1st_year_fees']))
                                    <div class="d-flex align-items-center">
                                        <div class="bg-gray-circle">
                                            <img src="{{ asset('assets/images/rm_image_130.svg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div>
                                            <strong><span class="">RM</span>
                                                {{ $year_fees['1st_year_fees'] }}</strong> <br>
                                            <small class="text-secondary">First year tuition
                                                Fee</small>
                                        </div>
                                    </div>
                                @endif

                                @if (isset($year_fees['2nd_year_fees']))
                                    <div class="d-flex align-items-center">
                                        <div class="bg-gray-circle">
                                            <img src="{{ asset('assets/images/rm_image_130.svg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div>
                                            <strong><span class="">RM</span>
                                                {{ $year_fees['2nd_year_fees'] }}</strong> <br>
                                            <small class="text-secondary">Second year tuition
                                                Fee</small>
                                        </div>
                                    </div>
                                @endif

                                @if (isset($year_fees['3rd_year_fees']))
                                    <div class="d-flex align-items-center">
                                        <div class="bg-gray-circle">
                                            <img src="{{ asset('assets/images/rm_image_130.svg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div>
                                            <strong><span class="">RM</span>
                                                {{ $year_fees['3rd_year_fees'] }}</strong> <br>
                                            <small class="text-secondary">Third year tuition
                                                Fee</small>
                                        </div>
                                    </div>
                                @endif

                                @if (isset($year_fees['4th_year_fees']))
                                    <div class="d-flex align-items-center">
                                        <div class="bg-gray-circle">
                                            <img src="{{ asset('assets/images/rm_image_130.svg') }}" alt=""
                                                srcset="">
                                        </div>
                                        <div>
                                            <strong><span class="">RM</span>
                                                {{ $year_fees['4th_year_fees'] }}</strong> <br>
                                            <small class="text-secondary">Fourth year tuition
                                                Fee</small>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="d-flex align-items-center">
                                <div class='bg-gray-circle'>
                                    <img src="{{ asset('assets/home/icons/calendar.svg') }}" alt=""
                                        srcset="">
                                </div>
                                <div>
                                    <strong>{{ $course->duration }} months</strong> <br>
                                    <small class="text-secondary">Duration</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endforeach
