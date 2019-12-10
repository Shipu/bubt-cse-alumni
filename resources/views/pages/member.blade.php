@extends('layout.app')

@push('header')
    <link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">
@endpush

@section('content')
    <div class="hero-mini hero-mini-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1>Members</h1>
                    <div class="your-breadcrumb">
                        <div class="breadcrumb-item"><a href="#advisory">Advisory</a></div>
                        <div class="breadcrumb-item"><a href="#executive">Executive</a></div>
                        <div class="breadcrumb-item"><a href="#general">General</a></div>
                        <div class="breadcrumb-item"><a href="#member">Member</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h4 id="advisory">Advisory Members</h4>
            @if (count($users[\App\Enums\UserType::ADVISORY] ?? []))
                <br>
                <br>
                @foreach($users[\App\Enums\UserType::ADVISORY] as $user)
                    @if($loop->iteration % 6 == 1)
                        <div class="row">
                            @endif

                            <div class="col-md-2 col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                                <div class="user-item">
                                    <img alt="image" src="{{ $user->avatar ?? 'assets/img/avatar/avatar-2.png'}}" class="img-fluid">
                                    <div class="user-details">
                                        <div class="user-name">{{ $user->name }}</div>
                                        <div class="text-job text-muted">{{ $user->designation }}</div>
                                        <div class="user-cta">
                                            <button class="btn btn-primary follow-btn"
                                                    data-follow-action="alert('user2 followed');"
                                                    data-unfollow-action="alert('user2 unfollowed');">Follow
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->iteration % 6 == 0 || $loop->last)
                        </div>
                        <br>
                        <br>
                    @endif
                @endforeach
            @else
                <div class="row mt-4">
                    <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                        <p><span class="badge badge-danger font-weight-bold">No data Available</span></p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="section-skew">
        <div class="container">
            <h4 id="executive">Executive Members</h4>
            @if (count($users[\App\Enums\UserType::EXECUTIVE] ?? []))
                <br>
                <br>
                @foreach($users[\App\Enums\UserType::EXECUTIVE] as $user)
                    @if($loop->iteration % 6 == 1)
                        <div class="row">
                            @endif

                            <div class="col-md-2 col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                                <div class="user-item">
                                    <img alt="image" src="{{ $user->avatar ?? 'assets/img/avatar/avatar-2.png'}}" class="img-fluid">
                                    <div class="user-details">
                                        <div class="user-name">{{ $user->name }}</div>
                                        <div class="text-job text-muted">{{ $user->designation }}</div>
                                        <div class="user-cta">
                                            <button class="btn btn-primary follow-btn"
                                                    data-follow-action="alert('user2 followed');"
                                                    data-unfollow-action="alert('user2 unfollowed');">Follow
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->iteration % 6 == 0 || $loop->last)
                        </div>
                        <br>
                        <br>
                    @endif
                @endforeach
            @else
                <div class="row mt-4">
                    <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                        <p><span class="badge badge-danger font-weight-bold">No data Available</span></p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h4 id="general">General Members</h4>
            @if (count($users[\App\Enums\UserType::GENERAL] ?? []))
                <br>
                <br>
                @foreach($users[\App\Enums\UserType::GENERAL] as $user)
                    @if($loop->iteration % 6 == 1)
                        <div class="row">
                            @endif

                            <div class="col-md-2 col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                                <div class="user-item">
                                    <img alt="image" src="{{ $user->avatar ?? 'assets/img/avatar/avatar-2.png'}}" class="img-fluid">
                                    <div class="user-details">
                                        <div class="user-name">{{ $user->name }}</div>
                                        <div class="text-job text-muted">{{ $user->designation }}</div>
                                        <div class="user-cta">
                                            <button class="btn btn-primary follow-btn"
                                                    data-follow-action="alert('user2 followed');"
                                                    data-unfollow-action="alert('user2 unfollowed');">Follow
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->iteration % 6 == 0 || $loop->last)
                        </div>
                        <br>
                        <br>
                    @endif
                @endforeach
            @else
                <div class="row mt-4">
                    <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                        <p><span class="badge badge-danger font-weight-bold">No data Available</span></p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h4 id="member">Members</h4>
            @if (count($users[\App\Enums\UserType::MEMBER] ?? []))
                <br>
                <br>
                @foreach($users[\App\Enums\UserType::MEMBER] as $user)
                    @if($loop->iteration % 6 == 1)
                        <div class="row">
                            @endif

                            <div class="col-md-2 col-6 col-sm-2 col-lg-2 mb-4 mb-md-0">
                                <div class="user-item">
                                    <img alt="image" src="{{ $user->avatar ?? 'assets/img/avatar/avatar-2.png'}}" class="img-fluid">
                                    <div class="user-details">
                                        <div class="user-name">{{ $user->name }}</div>
                                        <div class="text-job text-muted">{{ $user->designation }}</div>
                                        <div class="user-cta">
                                            <button class="btn btn-primary follow-btn"
                                                    data-follow-action="alert('user2 followed');"
                                                    data-unfollow-action="alert('user2 unfollowed');">Follow
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->iteration % 6 == 0 || $loop->last)
                        </div>
                        <br>
                        <br>
                    @endif
                @endforeach
            @else
                <div class="row mt-4">
                    <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                        <p><span class="badge badge-danger font-weight-bold">No data Available</span></p>
                    </div>
                </div>
            @endif
        </div>
    </section>


@endsection
