const searchInput = document.querySelector('.search-input');


if(window.location.href.includes('home')) {

    const parentContainer = document.querySelector('.card-container').children;

    let books = [];

    // Loop through the parent container and get the values of each book
    for (let i = 0; i < parentContainer.length; i++) {

        const bookTitle = parentContainer[i].querySelector('.title').textContent.toLowerCase();
        const bookAuthor = parentContainer[i].querySelector('.author').textContent.toLowerCase();

        books.push({title: bookTitle, author: bookAuthor});

    }

    searchInput.addEventListener('input', (e) => {

        const value = e.target.value.toLowerCase();

        let i = 0;
    
        books.forEach((book) => {
    
            const isVisible =   book.title.toLowerCase().includes(value) || 
                                book.author.toLowerCase().includes(value);
            parentContainer[i].classList.toggle('d-none', !isVisible);
    
            i++;
        })
    })
}

if(window.location.href.includes('members')) {

    let members = [];

    const tableContainer = document.querySelector('.table-container').children;

    // Loop through the table row (tr) and get the values of each member
    for (let i = 0; i < tableContainer.length; i++) {

        const memberId = tableContainer[i].querySelector('.member-id').textContent.toLowerCase();
        const firstname = tableContainer[i].querySelector('.firstname').textContent.toLowerCase();
        const lastname = tableContainer[i].querySelector('.lastname').textContent.toLowerCase();
        const address = tableContainer[i].querySelector('.address').textContent.toLowerCase();
        const phoneNumber = tableContainer[i].querySelector('.phone-number').textContent.toLowerCase();
        const memberExpiration = tableContainer[i].querySelector('.expiration').textContent.toLowerCase();


        members.push({id: memberId, firstname: firstname, lastname: lastname, address: address, phoneNumber: phoneNumber, memberExpiration: memberExpiration});
    }

    searchInput.addEventListener('input', (e) => {

        const value = e.target.value.toLowerCase();

        let i = 0;
    
        members.forEach((member) => {
    
            const isVisible =   member.id.includes(value) || 
                                member.firstname.toLowerCase().includes(value) || 
                                member.lastname.toLowerCase().includes(value) || 
                                member.address.toLowerCase().includes(value) || 
                                member.phoneNumber.toLowerCase().includes(value) || 
                                member.memberExpiration.toLowerCase().includes(value);

            tableContainer[i].classList.toggle('d-none', !isVisible);
    
            i++;
        })
    })
}

if(window.location.href.includes('books')) {

    let books = [];

    const tableContainer = document.querySelector('.table-container').children;

    // Loop through the table row (tr) and get the values of each book
    for (let i = 0; i < tableContainer.length; i++) {

        const bookId = tableContainer[i].querySelector('.book-id').textContent.toLowerCase();
        const title = tableContainer[i].querySelector('.title').textContent.toLowerCase();
        const author = tableContainer[i].querySelector('.author').textContent.toLowerCase();
        const genre = tableContainer[i].querySelector('.genre').textContent.toLowerCase();
        const bookAvailability = tableContainer[i].querySelector('.availability').textContent.toLowerCase();


        books.push({id: bookId, title: title, author: author, genre: genre, availability: bookAvailability});
    }

    searchInput.addEventListener('input', (e) => {

        const value = e.target.value.toLowerCase();

        let i = 0;
    
        books.forEach((book) => {
    
            const isVisible =   book.id.includes(value) || 
                                book.title.toLowerCase().includes(value) || 
                                book.author.toLowerCase().includes(value) || 
                                book.genre.toLowerCase().includes(value) || 
                                book.availability.toLowerCase().includes(value);

            tableContainer[i].classList.toggle('d-none', !isVisible);
    
            i++;
        })
    })
}

if(window.location.href.includes('borrowed')) {

    let borrowedBooks = [];

    const tableContainer = document.querySelector('.table-container').children;

    // Loop through the table row (tr) and get the values of each book
    for (let i = 0; i < tableContainer.length; i++) {

        const borrowId = tableContainer[i].querySelector('.borrow-id').textContent.toLowerCase();
        const bookId = tableContainer[i].querySelector('.book-id').textContent.toLowerCase();
        const memberId = tableContainer[i].querySelector('.member-id').textContent.toLowerCase();
        const borrowedDate = tableContainer[i].querySelector('.borrowed-date').textContent.toLowerCase();
        const returnDate = tableContainer[i].querySelector('.return-date').textContent.toLowerCase();
        
        borrowedBooks.push({borrowId: borrowId, bookId: bookId, memberId: memberId, borrowedDate: borrowedDate, returnDate: returnDate});
    }

    searchInput.addEventListener('input', (e) => {

        const value = e.target.value.toLowerCase();

        let i = 0;
    
        borrowedBooks.forEach((book) => {
    
            const isVisible =   book.borrowId.includes(value) || 
                                book.bookId.includes(value) || 
                                book.memberId.includes(value) || 
                                book.borrowedDate.includes(value) || 
                                book.returnDate.includes(value);

            tableContainer[i].classList.toggle('d-none', !isVisible);
    
            i++;
        })
    })
}

if(window.location.href.includes('returned')) {

    let returnedBooks = [];

    const tableContainer = document.querySelector('.table-container').children;

    // Loop through the table row (tr) and get the values of each book
    for (let i = 0; i < tableContainer.length; i++) {

        const returnId = tableContainer[i].querySelector('.return-id').textContent.toLowerCase();
        const bookId = tableContainer[i].querySelector('.book-id').textContent.toLowerCase();
        const memberId = tableContainer[i].querySelector('.member-id').textContent.toLowerCase();
        const returnDate = tableContainer[i].querySelector('.return-date').textContent.toLowerCase();
        


        returnedBooks.push({returnId: returnId, bookId: bookId, memberId: memberId, returnDate: returnDate});
    }

    searchInput.addEventListener('input', (e) => {

        const value = e.target.value.toLowerCase();

        let i = 0;
    
        returnedBooks.forEach((book) => {
    
            const isVisible =   book.returnId.includes(value) || 
                                book.bookId.includes(value) || 
                                book.memberId.includes(value) || 
                                book.returnDate.includes(value);

            tableContainer[i].classList.toggle('d-none', !isVisible);
    
            i++;
        })
    })
}

if(window.location.href.includes('overdue')) {

    let overdueBooks = [];

    const tableContainer = document.querySelector('.table-container').children;

    // Loop through the table row (tr) and get the values of each book
    for (let i = 0; i < tableContainer.length; i++) {

        const bookId = tableContainer[i].querySelector('.book-id').textContent.toLowerCase();
        const memberId = tableContainer[i].querySelector('.member-id').textContent.toLowerCase();
        const borrowedDate = tableContainer[i].querySelector('.borrowed-date').textContent.toLowerCase();
        const bookReturn = tableContainer[i].querySelector('.book-return').textContent.toLowerCase();
        
        overdueBooks.push({bookId: bookId, memberId: memberId, borrowedDate: borrowedDate, bookReturn: bookReturn});
    }

    searchInput.addEventListener('input', (e) => {

        const value = e.target.value.toLowerCase();

        let i = 0;
    
        overdueBooks.forEach((book) => {
    
            const isVisible =   book.returnId.includes(value) || 
                                book.bookId.includes(value) || 
                                book.memberId.includes(value) || 
                                book.returnDate.includes(value);

            tableContainer[i].classList.toggle('d-none', !isVisible);
    
            i++;
        })
    })
}
