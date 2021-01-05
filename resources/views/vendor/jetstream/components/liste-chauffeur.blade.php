<div class="container pt-8 mx-auto" x-data="loadEmployees()">
    <input
      x-ref="searchField"
      x-model="search"
      x-on:keydown.window.prevent.slash="$refs.searchField.focus()"
      placeholder="Search for an employee..."
      type="search"
      class="block w-full px-4 py-3 font-bold text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow"
    />
    <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-3 lg:grid-cols-4">
      <template x-for="item in filteredEmployees" :key="item">
        <div
          class="flex items-center p-3 transition duration-150 ease-in-out transform shadow hover:bg-indigo-100 hover:shadow-lg hover:rounded hover:scale-105"
        >
          <img
            class="w-10 h-10 mr-4 rounded-full"
            :src="`${item.profile_image}`"
          />
          <div class="text-sm">
            <p
              class="leading-none text-gray-900"
              x-text="item.employee_name + ' (' + item.employee_age + ')'"
            ></p>
            <p
              class="text-gray-600"
              x-text="'$'+item.employee_salary/100"
            ></p>
          </div>
        </div>
      </template>
    </div>
  </div>
  <script>
    function loadEmployees() {
      return {
        search: "",
        myForData: sourceData,
        get filteredEmployees() {
          if (this.search === "") {
            return this.myForData;
          }
          return this.myForData.filter((item) => {
            return item.employee_name
              .toLowerCase()
              .includes(this.search.toLowerCase());
          });
        },
      };
    }

    var sourceData = [
      {
        id: "1",
        employee_name: "Tiger Nixon",
        employee_salary: "320800",
        employee_age: "61",
        profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
      },
      {
        id: "2",
        employee_name: "Garrett Winters",
        employee_salary: "170750",
        employee_age: "63",
        profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
      },
      {
        id: "3",
        employee_name: "Ashton Cox",
        employee_salary: "86000",
        employee_age: "66",
        profile_image: "https://randomuser.me/api/portraits/men/3.jpg",
      },
      {
        id: "4",
        employee_name: "Cedric Kelly",
        employee_salary: "433060",
        employee_age: "22",
        profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
      },
      {
        id: "5",
        employee_name: "Airi Satou",
        employee_salary: "162700",
        employee_age: "33",
        profile_image: "https://randomuser.me/api/portraits/women/5.jpg",
      },
      {
        id: "6",
        employee_name: "Brielle Williamson",
        employee_salary: "372000",
        employee_age: "61",
        profile_image: "https://randomuser.me/api/portraits/women/6.jpg",
      },
      {
        id: "7",
        employee_name: "Herrod Chandler",
        employee_salary: "137500",
        employee_age: "59",
        profile_image: "https://randomuser.me/api/portraits/men/7.jpg",
      },
      {
        id: "8",
        employee_name: "Rhona Davidson",
        employee_salary: "327900",
        employee_age: "55",
        profile_image: "https://randomuser.me/api/portraits/women/8.jpg",
      },
      {
        id: "9",
        employee_name: "Colleen Hurst",
        employee_salary: "205500",
        employee_age: "39",
        profile_image: "https://randomuser.me/api/portraits/women/9.jpg",
      },
      {
        id: "10",
        employee_name: "Sonya Frost",
        employee_salary: "103600",
        employee_age: "23",
        profile_image: "https://randomuser.me/api/portraits/women/10.jpg",
      },
      {
        id: "11",
        employee_name: "Jena Gaines",
        employee_salary: "90560",
        employee_age: "30",
        profile_image: "https://randomuser.me/api/portraits/women/11.jpg",
      },
      {
        id: "12",
        employee_name: "Quinn Flynn",
        employee_salary: "342000",
        employee_age: "22",
        profile_image: "https://randomuser.me/api/portraits/men/12.jpg",
      },
      {
        id: "13",
        employee_name: "Charde Marshall",
        employee_salary: "470600",
        employee_age: "36",
        profile_image: "https://randomuser.me/api/portraits/women/12.jpg",
      },
      {
        id: "14",
        employee_name: "Haley Kennedy",
        employee_salary: "313500",
        employee_age: "43",
        profile_image: "https://randomuser.me/api/portraits/women/14.jpg",
      },
      {
        id: "15",
        employee_name: "Tatyana Fitzpatrick",
        employee_salary: "385750",
        employee_age: "19",
        profile_image: "https://randomuser.me/api/portraits/women/15.jpg",
      },
      {
        id: "16",
        employee_name: "Michael Silva",
        employee_salary: "198500",
        employee_age: "66",
        profile_image: "https://randomuser.me/api/portraits/men/16.jpg",
      },
      {
        id: "17",
        employee_name: "Paul Byrd",
        employee_salary: "725000",
        employee_age: "64",
        profile_image: "https://randomuser.me/api/portraits/men/17.jpg",
      },
      {
        id: "18",
        employee_name: "Gloria Little",
        employee_salary: "237500",
        employee_age: "59",
        profile_image: "https://randomuser.me/api/portraits/women/18.jpg",
      },
      {
        id: "19",
        employee_name: "Bradley Greer",
        employee_salary: "132000",
        employee_age: "41",
        profile_image: "https://randomuser.me/api/portraits/men/19.jpg",
      },
      {
        id: "20",
        employee_name: "Dai Rios",
        employee_salary: "217500",
        employee_age: "35",
        profile_image: "https://randomuser.me/api/portraits/men/20.jpg",
      },
      {
        id: "21",
        employee_name: "Jenette Caldwell",
        employee_salary: "345000",
        employee_age: "30",
        profile_image: "https://randomuser.me/api/portraits/women/21.jpg",
      },
      {
        id: "22",
        employee_name: "Yuri Berry",
        employee_salary: "675000",
        employee_age: "40",
        profile_image: "https://randomuser.me/api/portraits/men/22.jpg",
      },
      {
        id: "23",
        employee_name: "Caesar Vance",
        employee_salary: "106450",
        employee_age: "21",
        profile_image: "https://randomuser.me/api/portraits/men/23.jpg",
      },
      {
        id: "24",
        employee_name: "Doris Wilder",
        employee_salary: "85600",
        employee_age: "23",
        profile_image: "https://randomuser.me/api/portraits/women/24.jpg",
      },
    ];
  </script>