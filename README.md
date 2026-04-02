# vehicle_rental_platform
Ứng dụng Website quản lý, cho thuê xe được thiết kế để kết nối chủ sở hữu phương tiện và những người có nhu cầu thuê xe một cách nhanh chóng, dễ dàng

controller review
//Kiểm tra tính hợp lệ: Khi khách đánh giá, bạn có thể kiểm tra xem họ đã thực sự thuê xe đó chưa thông qua mối quan hệ:
$hasRented = $user->bookings()->where('car_id', $carId)->where('status', 'completed')->exists();

controller chi tieets xe
Đếm nhanh: Để biết xe có bao nhiêu lượt thuê mà không cần tải dữ liệu:
$car = Car::withCount('bookings')->find(1);
echo $car->bookings_count;

controler review
$allReviews = Review::withoutGlobalScope('approved')->get();