@extends('layout')

@section('title', 'เขียนบทความใหม่')

@section('content')
    <style>
        .form-card {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(236, 72, 153, 0.08);
            border: 1px solid #fce7ec;
        }

        .form-card h2 {
            font-weight: 700;
            color: #2b1d24;
            margin-bottom: 30px;
        }

        .form-card h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #ec4899, #f472b6);
            margin: 12px auto 0;
            border-radius: 2px;
        }

        .form-card label {
            font-weight: 600;
            color: #76646e;
            margin-bottom: 6px;
            display: block;
        }

        .form-card .form-control {
            border-radius: 10px;
            border: 1px solid #fce7ec;
            padding: 12px 14px;
            transition: all 0.2s ease;
        }

        .form-card .form-control:focus {
            border-color: #ec4899;
            box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.15);
        }

        .form-card textarea.form-control {
            resize: vertical;
        }

        .form-card .text-danger {
            font-size: 0.875rem;
        }

        .form-card .btn-primary {
            background: linear-gradient(90deg, #ec4899, #f472b6);
            border: none;
            border-radius: 10px;
            padding: 10px 26px;
            font-weight: 600;
            transition: transform 0.15s ease;
        }

        .form-card .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(236, 72, 153, 0.35);
        }

        .form-card .btn-secondary {
            border-radius: 10px;
            padding: 10px 26px;
            font-weight: 600;
            background: #fdf2f8;
            border: 1px solid #fce7ec;
            color: #76646e;
        }

        .form-card .btn-secondary:hover {
            background: #fce7ec;
            color: #2b1d24;
        }
    </style>

    <div class="form-card">
        <h2 class="text-center">เขียนบทความใหม่</h2>
        <form method="POST" action="/insert">
            @csrf
            <div class="form-group mb-3">
                <label for="title">ชื่อบทความ</label>
                <input type="text" name="title" class="form-control" placeholder="พิมพ์ชื่อบทความ...">
            </div>
            @error('title')
                <div class="my-2">
                    <span class="text-danger">{{ $message }}</span>
                </div>
            @enderror

            <div class="form-group mb-3">
                <label for="content">เนื้อหา</label>
                <textarea name="content" cols="30" rows="6" class="form-control" placeholder="พิมพ์เนื้อหาบทความ..."></textarea>
            </div>
            @error('content')
                <div class="my-2">
                    <span class="text-danger">{{ $message }}</span>
                </div>
            @enderror

            <div class="d-flex gap-2 mt-4">
                <input type="submit" value="บันทึก" class="btn btn-primary">
                <a href="/blog2" class="btn btn-secondary">บทความทั้งหมด</a>
            </div>
        </form>
    </div>
@endsection
