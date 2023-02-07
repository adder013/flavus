<template>
<v-container v-if="$auth.check()" fluid grid-list-xl>
    <v-layout fluid row wrap>
        <v-flex v-for="(order, index) in orders" :key="index" xs12 lg6>
            <v-card>
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">Номер заказа <span class="orange--text">{{ order.invoice_number }}</span></h3>
                        <a v-if="order.track_number" :href="'/tracks?code=' + order.track_number" class="track_delivery">Отследить доставку</a>
                        <div v-else class="track_delivery">Отследить доставку (Трек номер еще не назначен)</div><br>
                        <a class="download-pdf" @click="pdfDownload(order)">Скачать счет</a>
                    </div>
                </v-card-title>
                <v-card-text>
                    <v-data-table :headers="headers" :items="order.products" item-key="name">
                        <template v-slot:items="product">
                            <tr>
                                <td><a class="product-link" :href="'/' + product.item.url">{{ product.item.product_name }}</a></td>
                                <td class="text-xs-right">{{ product.item.sku_code }}</td>
                                <td class="text-xs-right">{{ product.item.amount }}</td>
                                <td class="text-xs-right">{{ product.item.price | formatPrice}}</td>
                                <td class="text-xs-right">{{ product.item.amount*product.item.price | formatPrice }}</td>
                            </tr>
                        </template>
                        <template v-slot:footer>
                            <td :colspan="headers.length" align="right">
                                <strong>{{ order.products | totalPrice }}</strong>
                            </td>
                        </template>
                    </v-data-table>
                </v-card-text>
            </v-card>
        </v-flex>
    </v-layout>
</v-container>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
        client: {},
        validation: {
            'email': '',
            'password': '',
        },
        headers: [{
                text: 'Наименование',
                align: 'left',
                sortable: true,
                value: 'product_name'
            },
            {
                text: 'Код товара',
                align: 'right',
                sortable: true,
                value: 'sku_code'
            },
            {
                text: 'Количество',
                align: 'right',
                sortable: true,
                value: 'amount'
            },
            {
                text: 'Цена',
                align: 'right',
                sortable: true,
                value: 'price'
            },
            {
                text: 'Стоимость',
                align: 'right',
                sortable: true,
                value: 'price'
            },
        ],
        orders: [],
    }),
    filters: {
        formatPrice(price) {
            return new Intl.NumberFormat('ru-RU', {
                style: 'currency',
                currency: 'RUB',
                currencyDisplay: 'symbol'
            }).format(price);
        },
        totalPrice(order) {
            let total = 0.00;
            order.forEach((product) => {
                total += product.price*product.amount;
            });
            return new Intl.NumberFormat('ru-RU', {
                style: 'currency',
                currency: 'RUB',
                currencyDisplay: 'symbol'
            }).format(total);
        }
    },
    methods: {
        login() {
            this.$auth.login({
                params: {
                    email: this.client.email,
                    password: this.client.password
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.log(error);
                },
                rememberMe: true,
                fetchUser: true,
                redirect: '/',
            });
        },
		pdfDownload(item) {
			axios.get("/invoices/" + item.crm_invoice_number, {
				responseType: "blob",
			}).then((response) => {
				const url = window.URL.createObjectURL(new Blob([response.data]))
				const link = document.createElement("a")
				function getRandomArbitrary(min, max) {
					return Math.floor(Math.random() * (max - min)) + min
				}
				let name = "invoice-" + item.crm_invoice_number + '-' + getRandomArbitrary(10000, 99999) + ".pdf"
				link.href = url
				link.setAttribute("download", name)
				document.body.appendChild(link)
				link.click()
			})
		},
    },
    created() {
        if (!this.$auth.check()) {
            this.$router.push('/login');
        } else {
            axios('/user/' + this.$auth.user().id + '/orders').then(
                (success) => {
                    this.orders = success.data;
                },
                (error) => {
                    console.error(error);
                }
            )
        }
    },
}
</script>
<style scoped lang="scss">
    .track_delivery {
        margin-top: 6px;
        font-size: 0.9em;
    }
    .product-link {
        color: #000;
        text-decoration: none;
    }
    .download-pdf {
        font-size: 0.9em;
        cursor: pointer;
        text-decoration: underline;
    }
    td {
        padding: 6px 24px !important;
    }
</style>
