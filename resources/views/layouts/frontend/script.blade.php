<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    let code = 'false';
    let currentPage = 1;
    let totalPage = 0;
    let hasMore = false;

    let lastRequest = null;

    let typingTimer;
    const typingInterval = 1500;
    let lastQuery = '';
    let sortBy='updated_at';
    let sortDirection='desc';

    $(document).ready(function(){
        $("form#search-form").submit(function(event) {
            event.preventDefault();
            code = $("#search__input").val();
            resetVariableValue();
            
            if (code != '') {
                let timerInterval;
                Swal.fire({
                    title: "Đang tìm kiếm!",
                    html: "Vui lòng đợi trong <b></b> mili giây.",
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                            timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log("I was closed by the timer");
                    }
                });
                console.log('click submit');
                $("#search__input").removeClass('is-invalid')
                lastQuery = code;
                fetchData(code);
            }else{
                $("#search__input").addClass('is-invalid')
                Swal.fire({
                    position: "top-end",
                    icon: "warning",
                    title: "Nhập vào mã sản phẩm để tìm kiếm!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });

        /** Code from Copilot AI
         * Doạn code bên dưới này
         * Deboucing sử dụng setTimout với khoảng tgian trì hoãn là 2s
         * setTimeout đc sử dụng để trì hoãn việc gửi yêu cầu Ajax mỗi khi người dùng nhập vào thanh tìm kiếm.
         * Nếu người dùng tiếp tục nhập trước khi khoảng tgian 2s kết thúc, bộ đếm tgian sẽ được giữ lại
         * Biến lastQuery sử dụng để lưu trữ giá trị truy vấn cuối cùng & kiếm tra xem có sự thay đổi so với lần gửi request trước không
         */
        
        $('#search__input').on('keyup', function() {
            clearTimeout(typingTimer);
            let query = $(this).val();

            // Deboucing
            typingTimer = setTimeout(function() {
                // Kiểm tra sự thay đổi
                if (query !== lastQuery && query.length >= 1) {
                    console.log('auto send request call api after 1.5s')
                    lastQuery = query;
                    code = query;
                    resetVariableValue();
                    $("#search__input").removeClass('is-invalid')
                    fetchData(query);
                }
                
            }, typingInterval);
        });

        $('#orderBy').change(function() {
            const selectedOption = $(this).find('option:selected');
            sortBy = selectedOption.data('sortby');
            sortDirection = $(this).val();
            if (lastQuery != '') {
                resetVariableValue()
                fetchData(code, currentPage, sortBy, sortDirection);
            }
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#scrollToTopButton').fadeIn();
            } else {
                $('#scrollToTopButton').fadeOut();
            }
        });

        $('#scrollToTopButton').click(function(e) {
            $('html, body').animate({ scrollTop: 0 }, 'smooth');
        });
    });

    function resetVariableValue(){
        currentPage = 1;
        totalPage = 0;
        hasMore = false;
    }

    async function fetchData(code, page=1, sort=sortBy, direction=sortDirection) {
        // const API_URL = `https://truyennham.online/api/search?code=${code}&page=${page}&sortBy=${sort}&sortDirection=${direction}`;
        const API_URL = `http://127.0.0.1:8000/api/search?code=${code}&page=${page}&sortBy=${sort}&sortDirection=${direction}`;

        if (lastRequest === API_URL) {
            console.log('Request skipped because it is identical to the last request.');
            swal.close()
            return;
        }

        lastRequest = API_URL;

        try {
            const response = await fetch(API_URL);
            console.log(response)
            // Handle 404
            if (!response.ok) { throw new Error("Could not fetch resource"); }
            const res = await response.json();
            
            if (res.data.products.data == '') {
                Swal.fire({
                    title: "Không tìm thấy kết quả!",
                    icon: "warning",
                    draggable: true,
                    showConfirmButton: false,
                    timer: 2000
                });
            } else {
                showProducts(res.data);
                setTimeout(function() {
                    swal.close()
                }, 300)
            }
        } catch (error) {
            console.error(error);
            Swal.fire({
                title: "Đã có lỗi sảy ra!",
                html: "Không kết nối được tới máy chủ.",
                icon: "error",
                draggable: true,
                showConfirmButton: false,
                timer: 2000
            });
        }
    }

    const showProducts = (res) => {
        const result_response_search = document.getElementById("result_response_search");
        
        if (hasMore == false) { result_response_search.innerHTML = ``; }
        
        if (res.products.last_page > 1) { totalPage = res.products.last_page; hasMore = true; }

        $('#total_result').text(res.products.to+'/'+res.products.total)

        res.products.data.forEach(element => {
            const name  = element.name;
            const code  = element.code;
            const price = element.price;
            const image = res.domain_cdn + element.thumb_url;
            const link_aff = element.link_aff;
            result_response_search.innerHTML += `
                <div class="item">
                    <div class="item_bg"></div>
                    <a href="${link_aff}" class="item__link" target="_blank">
                        <img src="${image}" class="item__image" alt="${name}">
                        <p class="item__code">${code}</p>
                        <p class="item__name">${name}</p>
                        <p class="item__price">${price.toLocaleString('vi-VI', {style : 'currency', currency : 'VND'})}</p>
                        <p class="item__code">${code}</p>
                    </a>
                </div>
            `;
        });
    };

    // Check if the total pages is greater than the current page (return true or false)
    const hasMoreProducts = (currentPage, totalPage) => {
        return totalPage === 0 || currentPage < totalPage;
    };

    // listen for the event that the user scrolls the screen down then calls the API to show more product if there are still product available
    window.addEventListener('scroll', () => {
        const {
            scrollTop,
            scrollHeight,
            clientHeight
        } = document.documentElement;
        if (scrollTop + clientHeight >= scrollHeight - 150 && hasMore == true && hasMoreProducts(currentPage, totalPage)) {
            currentPage++;
            fetchData(code, currentPage); // if having more products to fetch
        }
    }, {
        passive: true
    });

    // Bat su kien loi anh san pham
    function handleImageError(e) {
        let currentDomain = window.location.hostname;
        e.src = `/storage/uploads/products/676d40e9194bb-Đây là một cái link shopee.png`;
    }
</script>