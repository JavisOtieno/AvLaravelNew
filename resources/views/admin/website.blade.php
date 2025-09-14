@extends('admin/layouts/layout')
@section('content') 
      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
   
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-boxed">
          <!-- User Profile -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Website</h3>
            </div>
            <div class="block-content">
              <form action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                  <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                      {{-- Need Assistance. Contact us --}}
                    </p>
                  </div>
                  <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-username">Website name</label>
                      <input type="text" readonly class="form-control" id="one-profile-edit-username" name="one-profile-edit-username" placeholder="Enter your username.." value="{{$user['websitename']}}">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-name">Link</label>
                      <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" placeholder="Enter your name.." value="{{'https://'.auth()->user()->websitename.'.av.ke'}}">
                    </div>
       <div class="mb-4">
  <label class="form-label" for="one-profile-edit-name">Link</label>
  <div class="input-group">
    <input type="text" readonly class="form-control" id="website-link" 
           value="{{ 'https://' . auth()->user()->websitename . '.av.ke' }}">
    <button type="button" class="btn btn-alt-success" id="copy-btn">
      Copy
    </button>
  </div>
</div>

                    {{-- <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-email">Email Address</label>
                      <input type="email" readonly class="form-control" id="one-profile-edit-email" name="one-profile-edit-email" placeholder="Enter your email.." value="{{$user['email']}}">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-phone">Phone</label>
                      <input type="tel" readonly class="form-control" id="one-profile-edit-phone" name="one-profile-edit-phone" placeholder="Enter your phone" value="{{$user['phone']}}">
                    </div> --}}
                   
                    <div class="mb-4"
                    >
                    <a href="{{'https://'.auth()->user()->websitename.'.av.ke'}}" target="_blank" class="btn btn-alt-primary">
                      {{-- <button type="submit" class="btn btn-alt-primary"> --}}
                        Open
                      {{-- </button> --}}
                    </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END User Profile -->

          <!-- Change Password -->
       
          <!-- END Change Password -->

          <!-- Billing Information -->
          {{-- <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Billing Information</h3>
            </div>
            <div class="block-content">
              <form action="be_pages_projects_edit.html" method="POST" onsubmit="return false;">
                <div class="row push">
                  <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                      Your billing information is never shown to other users and only used for creating your invoices.
                    </p>
                  </div>
                  <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-company-name">Company Name (Optional)</label>
                      <input type="text" class="form-control" id="one-profile-edit-company-name" name="one-profile-edit-company-name">
                    </div>
                    <div class="row mb-4">
                      <div class="col-6">
                        <label class="form-label" for="one-profile-edit-firstname">Firstname</label>
                        <input type="text" class="form-control" id="one-profile-edit-firstname" name="one-profile-edit-firstname">
                      </div>
                      <div class="col-6">
                        <label class="form-label" for="one-profile-edit-lastname">Lastname</label>
                        <input type="text" class="form-control" id="one-profile-edit-lastname" name="one-profile-edit-lastname">
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-street-1">Street Address 1</label>
                      <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-street-2">Street Address 2</label>
                      <input type="text" class="form-control" id="one-profile-edit-street-2" name="one-profile-edit-street-2">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-city">City</label>
                      <input type="text" class="form-control" id="one-profile-edit-city" name="one-profile-edit-city">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-postal">Postal code</label>
                      <input type="text" class="form-control" id="one-profile-edit-postal" name="one-profile-edit-postal">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="one-profile-edit-vat">VAT Number</label>
                      <input type="text" class="form-control" id="one-profile-edit-vat" name="one-profile-edit-vat" value="IT00000000" disabled>
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-alt-primary">
                        Update
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div> --}}
          <!-- END Billing Information -->

          <!-- Connections -->
          {{-- <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Connections</h3>
            </div>
            <div class="block-content">
              <div class="row push">
                <div class="col-lg-4">
                  <p class="fs-sm text-muted">
                    You can connect your account to third party networks to get extra features.
                  </p>
                </div>
                <div class="col-lg-8 col-xl-7">
                  <div class="row mb-4">
                    <div class="col-sm-10 col-md-8 col-xl-6">
                      <a class="btn w-100 btn-alt-danger text-start" href="javascript:void(0)">
                        <i class="fab fa-fw fa-google opacity-50 me-1"></i> Connect to Google
                      </a>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-sm-10 col-md-8 col-xl-6">
                      <a class="btn w-100 btn-alt-info text-start" href="javascript:void(0)">
                        <i class="fab fa-fw fa-twitter opacity-50 me-1"></i> Connect to Twitter
                      </a>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-sm-10 col-md-8 col-xl-6">
                      <a class="btn w-100 btn-alt-primary bg-white d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        <span>
                          <i class="fab fa-fw fa-facebook me-1"></i> John Doe
                        </span>
                        <i class="fa fa-fw fa-check me-1"></i>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center fs-sm">
                      <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                        <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Facebook Connection
                      </a>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-sm-10 col-md-8 col-xl-6">
                      <a class="btn w-100 btn-alt-warning bg-white d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        <span>
                          <i class="fab fa-fw fa-instagram me-1"></i> @john_doe
                        </span>
                        <i class="fa fa-fw fa-check me-1"></i>
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center fs-sm">
                      <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                        <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Instagram Connection
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- END Connections -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      {{-- @push('scripts') --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
  document.getElementById("copy-btn").addEventListener("click", function() {
    let copyText = document.getElementById("website-link");
    navigator.clipboard.writeText(copyText.value)
      .then(() => {
        // replace alert with nicer UI if you want
        // alert("Link copied: " + copyText.value);
      await navigator.clipboard.writeText(input.value);
      // nice fallback: small transient message
      showCopiedToast('Link copied to clipboard');
      })
      .catch(err => {
        console.error("Failed to copy: ", err);
            
        alert('Could not copy. Select and press Ctrl+C.');
      });
  });
    function showCopiedToast(msg) {
    // minimal toast without libs
    const t = document.createElement('div');
    t.textContent = msg;
    Object.assign(t.style, {
      position: 'fixed',
      right: '20px',
      bottom: '20px',
      padding: '8px 12px',
      background: '#111',
      color: '#fff',
      borderRadius: '6px',
      zIndex: 9999,
      opacity: '0.95'
    });
    document.body.appendChild(t);
    setTimeout(() => t.remove(), 2000);
  }
});
});
</script>
{{-- @endpush --}}


@endsection
