<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
    style="background-image: url(@empty($value) {{ asset('panel/media/svg/files/blank-image.svg') }}  @else {{ asset($value) }} @endempty)">

    {{-- style="background-image: url({{ asset($value) ? asset($value) : asset('panel/assets/media/svg/files/blank-image.svg') }})" --}}

    <!--begin::Preview existing avatar-->
    <div class="image-input-wrapper w-150px h-150px"></div>
    <!--end::Preview existing avatar-->
    <!--begin::Label-->
    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تغییر تصویر">
        <!--begin::Icon-->
        <i class="bi bi-pencil-fill fs-7"></i>
        <!--end::Icon-->
        <!--begin::Inputs-->
        <input type="file" name="{{ $name }}" />
        <input type="hidden" name="avatar_remove" />
        <!--end::Inputs-->
    </label>
    <!--end::Label-->
    <!--begin::Cancel-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Cancel-->
    <!--begin::Remove-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Remove-->
</div>

<x-validation-error field='{{ $name }}'></x-validation-error>
