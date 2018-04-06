function linianos() { 
    let result = [];
    for (let i = 1; i <= 100; ++i) {
        let words = ['Linianos', 'IT', 'Linio', i];
        let index = (Math.min(i % 3, 1) + (Math.min(i % 5, 1) * 2));
        result.push(words[index]);
        
    }
    console.log(result.join('\n'));
}

linianos();