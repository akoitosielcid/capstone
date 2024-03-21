class APIClient {
    constructor({ url }) {
        this.url = url;
    }

    async getPOST({ method, data }) {
        try {
            const response = await fetch(this.url, {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    'Content-Type': 'application/json'
                }
            });
    
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
    
            return await response.json();
        } catch (error) {
            throw new Error(`Failed to fetch: ${error.message}`);
        }
    }
    
}
