<div>
    
    
      <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8" x-data="alpineInit()" x-init="init()">
        <div class="flex flex-col">
          <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="relative inline-block min-w-full overflow-hidden align-middle shadow sm:rounded-lg">
              <template x-if="isLoading">
                <div class="absolute inset-0" style="
                        background-image: linear-gradient(
                          0deg,
                          white,
                          transparent
                        );
                      "></div>
              </template>
              <table class="min-w-full">
                <thead>
                  <tr>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                      Name
                    </th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                      Title
                    </th>
                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                      Status
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                  </tr>
                </thead>
                <tbody class="bg-white">
                  <template x-for="i in [1,2,3,4,5,6,7,8,9]" x-if="isLoading">
                    <tr>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 w-10 h-10">
                            <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                          </div>
                          <div class="ml-4">
                            <span class="mb-2 text-sm leading-5 text-transparent bg-gray-300 rounded-sm" x-text="Math.random().toString(2)"></span>
                            <div class="text-sm leading-5 text-transparent bg-gray-300 rounded-sm" x-text="Math.random().toString(2)"></div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <span class="mb-2 text-xs leading-5 text-transparent bg-gray-300 rounded-sm" x-text="Math.random().toString(2)"></span>
                        <div class="text-xs leading-5 text-transparent">
                          <span x-text="Math.random().toString(2)" class="bg-gray-300 rounded-sm"></span>
                        </div>
                        <div class="text-xs leading-5 text-transparent">
                          <span x-text="Math.random().toString(2)" class="bg-gray-300 rounded-sm"></span>
                        </div>
                        <div class="text-xs leading-5 text-transparent">
                          <span x-text="Math.random().toString(2)" class="bg-gray-300 rounded-sm"></span>
                        </div>
                        <div class="text-xs leading-5 text-transparent">
                          <span x-text="Math.random().toString(2)" class="bg-gray-300 rounded-sm"></span>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-transparent bg-green-200 rounded-full">
                          Published
                        </span>
                      </td>
                      <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                        <a href="#" class="px-2 text-transparent bg-indigo-200 rounded-sm">Edit</a>
                      </td>
                    </tr>
                  </template>
                  <template x-for="post in posts" :key="post.id" x-if="!isLoading">
                    <tr>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-10 h-10 rounded-full" :src="`https://i.pravatar.cc/40?u=${post.user.email}`" alt="" />
                          </div>
                          <div class="ml-4">
                            <div class="text-sm font-medium leading-5 text-gray-900" x-text="post.user.name"></div>
                            <div class="text-sm leading-5 text-gray-500" x-text="post.user.email"></div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900" x-text="post.title"></div>
                        <div class="text-sm leading-5 text-gray-500 truncate" x-text="post.body"></div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                          Published
                        </span>
                      </td>
                      <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
                      </td>
                    </tr>
                  </template>
                </tbody>
              </table>
              <div class="flex items-center justify-between px-4 py-3 bg-white sm:px-6">
                <div class="flex justify-between flex-1 sm:hidden">
                  <a role="button" x-bind:class="{'cursor-not-allowed': prevUrl == null || firstUrl == currentUrl}" @click.prevent="init(prevUrl)" x-bind:disabled="prevUrl == null || firstUrl == currentUrl" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                    Previous
                  </a>
                  <a role="button" x-bind:class="{'cursor-not-allowed': nextUrl == null || lastUrl == currentUrl}" @click.prevent="init(nextUrl)" x-bind:disabled="nextUrl == null || lastUrl == currentUrl" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                    Next
                  </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                  <div>
                    <p class="text-sm leading-5 text-gray-700">
                      Showing
                      <span class="font-medium" x-text="firstItem()"></span>
                      to
                      <span class="font-medium" x-text="lastItem()"></span>
                      of
                      <span class="font-medium" x-text="total"></span>
                      results
                    </p>
                  </div>
                  <div>
                    <span class="relative z-0 inline-flex shadow-sm">
                      <button type="button" class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" x-bind:class="{'cursor-not-allowed': firstUrl == currentUrl}" @click="init(firstUrl)" x-bind:disabled="firstUrl == currentUrl">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.70679 5.29303C9.89426 5.48056 9.99957 5.73487 9.99957 6.00003C9.99957 6.26519 9.89426 6.5195 9.70679 6.70703L6.41379 10L9.70679 13.293C9.88894 13.4816 9.98974 13.7342 9.98746 13.9964C9.98518 14.2586 9.88001 14.5094 9.6946 14.6948C9.5092 14.8803 9.25838 14.9854 8.99619 14.9877C8.73399 14.99 8.48139 14.8892 8.29279 14.707L4.29279 10.707C4.10532 10.5195 4 10.2652 4 10C4 9.73487 4.10532 9.48056 4.29279 9.29303L8.29279 5.29303C8.48031 5.10556 8.73462 5.00024 8.99979 5.00024C9.26495 5.00024 9.51926 5.10556 9.70679 5.29303V5.29303Z" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7065 5.29279C15.894 5.48031 15.9993 5.73462 15.9993 5.99979C15.9993 6.26495 15.894 6.51926 15.7065 6.70679L12.4135 9.99979L15.7065 13.2928C15.8887 13.4814 15.9895 13.734 15.9872 13.9962C15.9849 14.2584 15.8798 14.5092 15.6944 14.6946C15.509 14.88 15.2581 14.9852 14.9959 14.9875C14.7337 14.9897 14.4811 14.8889 14.2925 14.7068L10.2925 10.7068C10.1051 10.5193 9.99976 10.265 9.99976 9.99979C9.99976 9.73462 10.1051 9.48031 10.2925 9.29279L14.2925 5.29279C14.4801 5.10532 14.7344 5 14.9995 5C15.2647 5 15.519 5.10532 15.7065 5.29279V5.29279Z" />
                        </svg>
                      </button>
  
                      <button type="button" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" x-bind:class="{'cursor-not-allowed': prevUrl == null || firstUrl == currentUrl}" @click="init(prevUrl)" x-bind:disabled="prevUrl == null || firstUrl == currentUrl">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                      </button>
                      <template x-for="(page,index) in pages()" :key="index">
                        <button type="button" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700" x-bind:class="{'cursor-not-allowed text-blue-600 hover:text-blue-600': page.isActive}" x-bind:disabled="page.isActive" @click="init(page.url)">
                          <span x-text="page.name"></span>
                        </button>
                      </template>
                      <template v-if="lastUrl !== currentUrl">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300">
                          ...
                        </span>
                      </template>
  
                      <button type="button" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" x-bind:class="{'cursor-not-allowed': nextUrl == null || lastUrl == currentUrl}" @click="init(nextUrl)" x-bind:disabled="nextUrl == null || lastUrl == currentUrl">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                      </button>
                      <button type="button" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" x-bind:class="{'cursor-not-allowed': lastUrl == currentUrl}" @click="init(lastUrl)" x-bind:disabled="lastUrl == currentUrl">
                        <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.29279 14.707C4.10532 14.5195 4 14.2651 4 14C4 13.7348 4.10532 13.4805 4.29279 13.293L7.58579 9.99998L4.29279 6.70698C4.11063 6.51838 4.00983 6.26578 4.01211 6.00358C4.01439 5.74138 4.11956 5.49057 4.30497 5.30516C4.49038 5.11975 4.74119 5.01458 5.00339 5.01231C5.26558 5.01003 5.51818 5.11082 5.70679 5.29298L9.70679 9.29298C9.89426 9.48051 9.99957 9.73482 9.99957 9.99998C9.99957 10.2651 9.89426 10.5195 9.70679 10.707L5.70679 14.707C5.51926 14.8945 5.26495 14.9998 4.99979 14.9998C4.73462 14.9998 4.48031 14.8945 4.29279 14.707Z" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2928 14.6947C10.1053 14.5072 10 14.2529 10 13.9877C10 13.7225 10.1053 13.4682 10.2928 13.2807L13.5858 9.98771L10.2928 6.69471C10.1106 6.50611 10.0098 6.25351 10.0121 5.99131C10.0144 5.72911 10.1196 5.4783 10.305 5.29289C10.4904 5.10749 10.7412 5.00232 11.0034 5.00004C11.2656 4.99776 11.5182 5.09855 11.7068 5.28071L15.7068 9.28071C15.8943 9.46824 15.9996 9.72255 15.9996 9.98771C15.9996 10.2529 15.8943 10.5072 15.7068 10.6947L11.7068 14.6947C11.5193 14.8822 11.265 14.9875 10.9998 14.9875C10.7346 14.9875 10.4803 14.8822 10.2928 14.6947Z" />
                        </svg>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /End replace -->
      </div>
    
  </div>
  <script>
    function alpineInit() {
      return {
        isLoading: true,
        posts: [],
        currentUrl: null,
        firstUrl: "https://jsonplaceholder.typicode.com/posts?_page=1&_limit=15&_expand=user",
        nextUrl: null,
        prevUrl: null,
        lastUrl: null,
        total: null,
        currentPage: 1,
        perPage: 15,
        visiblePages: 3,
        totalPages() {
          return Math.round(this.total / this.perPage);
        },
        startPage() {
          if (this.currentPage == 1) {
            return 1;
          }
          if (this.currentPage == this.totalPages()) {
            return this.totalPages() - this.visiblePages + 1;
          }
          return this.currentPage - 1;
        },
        endPage() {
          return Math.min(
            this.startPage() + this.visiblePages - 1,
            this.totalPages()
          );
        },
        pages() {
          const range = [];
          for (let i = this.startPage(); i <= this.endPage(); i += 1) {
            range.push({
              name: i,
              isActive: i == this.currentPage,
              url: `https://jsonplaceholder.typicode.com/posts?_page=${i}&_limit=15&_expand=user`,
            });
          }
          return range;
        },
        firstItem() {
          return this.perPage * this.currentPage - 15 + 1;
        },
        lastItem() {
          let lastItem = this.perPage * this.currentPage;
          if (lastItem > this.total) {
            return this.total;
          }
          return this.perPage * this.currentPage;
        },
        init(url = this.firstUrl) {
          this.isLoading = true;
          this.currentUrl = url;
          let params = new URL(this.currentUrl).searchParams;
          this.currentPage = params.get("_page");
          this.perPage = params.get("_limit");
          fetch(`${this.currentUrl}`).then((response) => {
            this.total = response.headers.get("x-total-count");
            let formattedLinks = [];
            let links = response.headers.get("link");
            if (typeof links === "string") {
              let extractedArr = links.split(", ");
              extractedArr.forEach((val) => {
                let values = val.split("; ");
                let type = values[1].slice(5, -1);
                let url = values[0].slice(1, -1);
                formattedLinks[type] = url;
              });
              this.firstUrl = formattedLinks["first"];
              this.prevUrl = formattedLinks.prev ?
                formattedLinks["prev"] :
                null;
              this.nextUrl = formattedLinks.next ?
                formattedLinks["next"] :
                null;
              this.lastUrl = formattedLinks["last"];
            }
            response.json().then((json) => {
              this.isLoading = false;
              this.posts = json;
            });
          });
        },
      };
    }
  </script>