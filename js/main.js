
const MENU_IMAGE_BASE_URL = './'
const MENUS_IMAGE_BASE_URL = 'images/menus/';

const renderMenus = (target) => {
    //TODO:
    const jsonDataUrl = './api/menu/get.php';

    const menuContainer = document.getElementById(target);

    fetch(jsonDataUrl)
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                const menuItem = document.createElement('div');
                menuItem.classList.add('bg-white', 'rounded-lg', 'shadow-lg', 'p-6');
                menuItem.innerHTML = `
                        <img class="w-full h-48 object-cover rounded-t-lg mb-4" src="${MENUS_IMAGE_BASE_URL}${item.image_name}" alt="${item.name}">
                        <h4 class="text-xl font-bold text-gray-800">${item.name}</h4>
                        <p class="text-gray-600 mt-2">${item.summary.replace(/\n/g, '<br>')}</p>
                        <p class="text-gray-800 font-bold mt-2">&yen;${item.price}</p>
                        <a class="text-blue-800 font-bold mt-2" href="menu/detail.php?id=${item.id}">More...</a>
                    `;
                menuContainer.appendChild(menuItem);
            });
        })
        .catch(error => {
            console.error('Error fetching JSON data:', error);
        });
}

const renderMenusByCategory = (target) => {
    const jsonDataUrl = './api/menu/by_category.php';

    const menuSection = document.getElementById(target);

    fetch(jsonDataUrl)
        .then(response => response.json())
        .then(data => {
            const menus = data.menus;
            const categories = data.categories;

            // console.log(menus)

            for (const categoryId in menus) {
                const categoryMenus = menus[categoryId];
                const category = categories[categoryId];

                // カテゴリ名の見出しを生成
                const categoryHeading = document.createElement('h3');
                categoryHeading.classList.add('text-4xl', 'font-bold', 'text-gray-800', 'mb-4', 'mt-4');
                categoryHeading.textContent = category;
                menuSection.appendChild(categoryHeading);

                // メニューコンテナを生成
                const menuContainer = document.createElement('div');
                menuContainer.classList.add('grid', 'grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-6');
                menuSection.appendChild(menuContainer);

                // 各メニューアイテムのHTMLを生成
                categoryMenus.forEach(item => {
                    const menuItem = document.createElement('div');
                    menuItem.classList.add('bg-white', 'rounded-lg', 'shadow-lg', 'p-6');
                    menuItem.innerHTML = `
                            <img class="w-full h-48 object-cover rounded-t-lg mb-4" src="${MENUS_IMAGE_BASE_URL + item.image_name}" alt="${item.name}">
                            <h4 class="text-xl font-bold text-gray-800">${item.name}</h4>
                            <p class="text-gray-600 mt-2">${item.summary.replace(/\n/g, '<br>')}</p>
                            <p class="text-gray-800 font-bold mt-2">&yen;${Number(item.price).toLocaleString()}</p>
                            <a class="text-blue-800 font-bold mt-2" href="menu/detail.php?id=${item.id}">More...</a>
                        `;
                    menuContainer.appendChild(menuItem);
                });
            }
        })
        .catch(error => {
            console.error('Error fetching JSON data:', error);
        });
}