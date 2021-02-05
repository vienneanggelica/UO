<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registration as?</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="col-lg">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <a class="fas fa-chalkboard-teacher fa-sm fa-5x mr-2 text-gray-400" href="<?= base_url(); ?>auth/registration"></a>
                                            <h5> Dosen </h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <a class="fas fa-user-graduate fa-sm fa-5x mr-2 text-gray-400" href="<?= base_url(); ?>auth/registrationmahasiswa"></a>
                                            <h5> Mahasiswa </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>