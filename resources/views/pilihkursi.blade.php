<!-- 
Rafles Yuda Stevenses Nababan, 3312401062
-->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Kursi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .seat-container {
            flex: 3;
            text-align: center;
            background-color: rgb(170, 170, 166);
            padding: 10px;
            border-radius: 20px;
            border: solid 2px white;
        }

        .seats {
            display: grid;
            grid-template-columns: repeat(10, 50px);
            gap: 10px;
            justify-content: center;
            margin-bottom: 30px;
        }

        .seat {
            width: 50px;
            height: 50px;
            background-color: #333;
            text-align: center;
            line-height: 50px;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .seat.selected {
            background-color: rgb(57, 223, 79);
        }

        .seat.booked {
            background-color: red;
            cursor: not-allowed;
        }

        .booking-box {
            flex: 1;
            width: 250px;
            padding: 15px;
            background-color: rgb(170, 170, 166);
            border: 2px solid white;
            text-align: left;
            margin-left: 30px;
            border-radius: 20px;
            color: white;
        }

        .book-btn {
            margin-top: 20px;
            padding: 12px;
            background: orange;
            color: white;
            border: 1px solid white;
            cursor: pointer;
            font-size: 16px;
            width: 30%;
            border-radius: 5px;
        }

        .screen {
            background-color: #333;
            color: white;
            width: 80%;
            height: 20px;
            margin: 0 auto;
            border-radius: 8px;
            line-height: 20px;
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="bioskop.html">TICS ID</a>
        </div>
    </nav>
    <br><br>

    <div class="container">
        <div class="seat-container">
            <div class="screen">Screen</div>
            <form id="booking-form">
                <div class="seats" id="seat-container">
                    <!-- Kursi akan dibuat dengan JavaScript -->
                </div>
                <input type="hidden" name="seats" id="selected-seats">
                <button type="submit" class="book-btn">Book Now</button>
            </form>
        </div>

        <div class="booking-box">
            <h1>Booking Details</h1>
            <hr>
            <p><strong>Movie Title:</strong> <span id="movie-title">Avengers: Endgame</span></p>
            <hr>
            <p><strong>Theater:</strong> <span id="theater-name">Studio 3</span></p>
            <hr>
            <p><strong>Date:</strong> <span id="show-date">2025-03-30</span></p>
            <hr>
            <p><strong>Time:</strong> <span id="show-time">19:00</span></p>
            <hr>
            <p><strong>Seats Selected:</strong> <span id="amount">0</span></p>
            <hr>
            <p><strong>Total Price:</strong> <span id="total">Rp 0</span></p>
        </div>
    </div>

    <script>
        let selectedSeats = [];
        let totalAmount = 0;
        const pricePerSeat = 50000; // Harga kursi (harcoded)
        const bookedSeats = ["A1", "B3", "C5"]; // Kursi yang sudah dipesan

        function generateSeats() {
            const seatContainer = document.getElementById("seat-container");

            for (let row of ["A", "B", "C", "D", "E", "F"]) {
                for (let col = 1; col <= 10; col++) {
                    let seatId = row + col;
                    let seat = document.createElement("div");
                    seat.className = "seat";
                    seat.innerText = seatId;

                    if (bookedSeats.includes(seatId)) {
                        seat.classList.add("booked");
                    } else {
                        seat.addEventListener("click", () => toggleSeat(seat, seatId));
                    }

                    seatContainer.appendChild(seat);
                }
            }
        }

        function toggleSeat(element, seat) {
            if (element.classList.contains("booked")) {
                alert("Kursi ini sudah dipesan!");
                return;
            }

            element.classList.toggle("selected");
            const index = selectedSeats.indexOf(seat);

            if (index > -1) {
                selectedSeats.splice(index, 1);
                totalAmount -= pricePerSeat;
            } else {
                selectedSeats.push(seat);
                totalAmount += pricePerSeat;
            }

            document.getElementById("selected-seats").value = selectedSeats.join(",");
            document.getElementById("amount").innerText = selectedSeats.length;
            document.getElementById("total").innerText = `Rp ${totalAmount}`;
        }

        document.getElementById("booking-form").addEventListener("submit", function(event) {
            event.preventDefault();

            if (selectedSeats.length === 0) {
                alert("Pilih kursi terlebih dahulu!");
                return;
            }

            alert(`Pemesanan berhasil!\nKursi: ${selectedSeats.join(", ")}\nTotal Harga: Rp ${totalAmount}`);
        });

        generateSeats();
    </script>

</body>

</html>