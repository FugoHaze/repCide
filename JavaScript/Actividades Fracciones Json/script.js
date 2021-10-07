var fraccion={
    n1:27,
    n2:34,
    d1:44,
    d2:98,
    suma:function(){
        if (this.d1==this.d2) {
            let r1=this.n1+this.n2;
                res=r1/this.d1;
        }else{
            let r1=this.n1*this.d2;
                r2=this.n2*this.d1;
                r3=this.d1*this.d2;
            var s=r1+r2;
                res=s/r3;
        }
        return res;
    },
    resta:function(){
        if (this.d1==this.d2) {
            let r1=this.n1-this.n2;
                res=r1/this.d1;
        }else{
            let r1=this.n1*this.d2;
                r2=this.n2*this.d1;
                r3=this.d1*this.d2;
            var s=r1-r2;
                res=s/r3;
        }
        return res;
    },
    mult:function(){
        let r1=this.n1*this.n2;
            r2=this.d1*this.d2;
        var res=r1/r2;

        return res;
    },
    div:function(){
        let r1=this.n1*this.d2;
            r2=this.d1*this.n2;
        var res=r1/r2;

        return res;
    }
}

console.log(fraccion.div());