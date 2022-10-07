import { ref } from 'vue';

export default function useCustomers(){

    const customers = ref([]);

    const getCustomers = async () => {
        const response = await axios.get('/api/customers');
        customers.value = response.data;
    }

    return {
        customers,
        getCustomers,
    }
}