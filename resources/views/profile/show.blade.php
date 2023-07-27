{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.master')
@section('content')
    <!--Basic User Details Starts-->
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Profile</div>
                        <p class="content-sub-header"></p>
                    </div>
                </div>
                <section id="user-profile">
                    <div class="row">
                      <div class="col-12">
                        <div class="card profile-with-cover">
                          <div class="card-img-top img-fluid bg-cover height-300" style="background: url('app-assets/img/photos/14.jpg') 50%;"></div>
                          <div class="media profil-cover-details row">
                            <div class="col-5">
                              <div class="align-self-start halfway-fab pl-3 pt-2">
                                <div class="text-left">
                                  <h3 class="card-title white">Jose Diaz</h3>
                                </div>
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="align-self-center halfway-fab text-center">
                                <a class="profile-image">
                                  <img src="app-assets/img/portrait/avatars/avatar-08.png" class="rounded-circle img-border gradient-summer width-100"
                                    alt="Card image">
                                </a>
                              </div>
                            </div>
                            <div class="col-5">
                            </div>
                            <div class="profile-cover-buttons">
                              <div class="media-body halfway-fab align-self-end">
                                <div class="text-right d-none d-sm-none d-md-none d-lg-block">
                                  <button type="button" class="btn btn-primary btn-raised mr-2"><i class="fa fa-plus"></i> Follow</button>
                                  <button type="button" class="btn btn-success btn-raised mr-3"><i class="fa fa-dashcube"></i> Message</button>
                                </div>
                                <div class="text-right d-block d-sm-block d-md-block d-lg-none">
                                  <button type="button" class="btn btn-primary btn-raised mr-2"><i class="fa fa-plus"></i></button>
                                  <button type="button" class="btn btn-success btn-raised mr-3"><i class="fa fa-dashcube"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="profile-section">
                            <div class="row">
                              <div class="col-lg-5 col-md-5 ">
                                <ul class="profile-menu no-list-style">
                                  <li>
                                    <a href="#about" class="primary font-medium-2 font-weight-600">About</a>
                                  </li>
                                  <li>
                                    <a href="#user" class="primary font-medium-2 font-weight-600">Timeline</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-lg-2 col-md-2 text-center">
                                <span class="font-medium-2 text-uppercase">Jose Diaz</span>
                                <p class="grey font-small-2">Ninja Developer</p>
                              </div>
                              <div class="col-lg-5 col-md-5">
                                <ul class="profile-menu no-list-style">
                                  <li>
                                    <a href="#friends" class="primary font-medium-2 font-weight-600">Friends</a>
                                  </li>
                                  <li>
                                    <a href="#photos" class="primary font-medium-2 font-weight-600">Photos</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
  <!--Basic User Details Ends-->
@endsection